<?php

namespace App\Http\Controllers;

use App\Baner;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baners = Baner::where('products_baner' , 0)->orderBy('id' , 'DESC')->get();
        $count = $baners->count();

        $p_baner = Baner::where('products_baner' , 1)->first();

        if (! $p_baner)
        {
            $p_baner = Baner::create([
                'image' => 'img.jpg' ,
                'link' => '#' ,
                'products_baner' => 1
            ]);
        }

        if ($count < 17)
        {
            for ($i = 0; $i < 17 - $count; $i++)
            {
                $baners = Baner::create([
                    'image' => 'img.jpg' ,
                    'link' => '#'
                ]);
            }
        }
        return response()->json([
            'main_baners' => $baners ,
            'products_baner' => $p_baner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id , Request $request)
    {
        $validata = Validator::make($request->all() , [
            'link' => 'nullable|string' ,
            'image' => 'nullable|image' ,
            'main_id' => 'required' ,
            'third_id' => 'required' ,
        ]);

        if ($validata->fails())
        {
            return new JsonResponse($validata->errors()->all() , 400);
        }

        $baner = Baner::find($id);

        if ($request->image == null || $request->image == '')
        {
            $baner->update([
                'link' => $request->link ,
                'main_id' => $request->main_id ,
                'third_id' => $request->third_id ,
            ]);
        }
        else
        {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path('/img/product-images') , $name);

            if ($request->link == null || $request->link == '')
            {
                $baner->update([
                    'image' => $name ,
                    'main_id' => $request->main_id ,
                    'third_id' => $request->third_id ,
                ]);
            }
            else
            {
                $baner->update([
                    'image' => $name ,
                    'link' => $request->link ,
                    'main_id' => $request->main_id ,
                    'third_id' => $request->third_id ,
                ]);
            }

        }

        return response()->json([
            'status' => 'updated' ,
            'baner' => $baner
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function show(Baner $baner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function edit(Baner $baner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baner $baner)
    {
        //
    }
}
