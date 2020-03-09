<?php

namespace App\Http\Controllers;

use App\Order;
use App\Pay;
use Illuminate\Http\Request;
use Shetabit\Payment\Exceptions\InvalidPaymentException;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Payment\Invoice;

class PayController extends Controller
{
    public function zarinPal_request(Request $request)
    {

        # create new invoice
        $price = (int) $request->price;
        $invoice = (new Invoice)->amount($price);


        # purchase the given invoice
        return Payment::callbackUrl(route('zarinpal.verify' , $price))
            ->purchase($invoice, function($driver, $transactionId) {
                // we can store $transactionId in database
                Pay::create([
                    'transaction_id' => $transactionId
                ]);
            }
            )->pay()->getTargetUrl();

    }

    public function callback($price, Request $request)
    {

        # you need to verify the payment to insure the invoice has been paid successfully
        // we use transaction's id to verify payments
        // its a good practice to add invoice's amount.

        $price = (int) $price;
        $pay = Pay::where('transaction_id' , request()->get('Authority'))->first();
        try {
            Payment::amount($price)->transactionId(\request()->get('Authority'))->verify();
            $pay->update([
                'status' => request()->get('Status') ,
                'message' => 'پرداخت با موفقیت انجام شد'
            ]);
            Order::create([
                'pay_id' => $pay->id ,
                'payment_method' => 'online'
            ]);
            return redirect(route('pay.success'))->with('pay' , $pay->id);

        } catch (InvalidPaymentException $exception) {
            /**
            when payment is not verified , it throw an exception.
            we can catch the exception to handle invalid payments.
            getMessage method, returns a suitable message that can be used in user interface.
             **/
            //echo $exception->getMessage();
            $pay->update([
                'status' => request()->get('Status') ,
                'message' =>  $exception->getMessage()
            ]);
            return redirect(route('pay.error'));
        }
    }
}
