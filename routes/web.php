<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('index');
//    ->where('any', '.*');

Route::get('/products/category/{any}' , 'MainController@index')->name('main');

Route::get('/products/category/{any}/second/{any1}' , 'MainController@index')->name('second');

Route::get('/products/category/third/{any}/{any1}' ,'MainController@index')->name('third');

Route::get('/products/search/{any}' , function () {
    return view('products');
})->where('any', '.*');

Route::get('/card/{any}' , function () {
    return view('products');
})->where('any', '.*');

Route::get('/404' , function () {
    return view('404');
});

Route::get('/faq' , function () {
    return view('products');
});

Route::get('/about-us' , function () {
    return view('products');
});

Route::get('/contact-us' , function () {
    return view('products');
});

Route::get('/order/pay/error' , function () {
    return view('products');
});

Route::get('/{any}/order/pay' , function () {
    return view('products');
})->where('any', '.*');

Route::get('/admin/{any}' , function () {
    return view('admin');
})->where('any', '.*');

Route::get('/user/{any}' , function () {
    return view('admin');
})->where('any', '.*');

Route::get('/details/{any}' , function () {
    return view('admin');
})->where('any', '.*');

Route::get('/adminOrdersDetails/{any}' , function () {
    return view('admin');
})->where('any', '.*');

Route::get('/product/{any}' , function () {
    return view('admin');
})->where('any', '.*');

Route::get('/payment-success', function () {
    return view('payment');
})->name('pay.success');

Route::get('/payment-error', function () {
    return view('payment-error');
})->name('pay.error');

Route::get('/cafebazaar', function () {
    return view('cafebazaar');
});

Route::get('/zarinpal/callback/{price}' ,'PayController@callback')->name('zarinpal.verify');


