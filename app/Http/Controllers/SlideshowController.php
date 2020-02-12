<?php

namespace App\Http\Controllers;

use App\Slideshow;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SlideshowController extends Controller
{
    public function create(Request $request)
    {
        $valid = Validator::make($request->all() , [
            'img' => 'required|image' ,
            'main_id' => 'required' ,
            'third_id' => 'required' ,
        ]);

        if ($valid->fails())
        {
            return new JsonResponse($valid->errors()->all() , 400);
        }

       if ($request->link == null || $request->link == '')
       {
           $request->link = '#';

       }

        $image = $request->file('img');
        $name = $image->getClientOriginalName();
        $image->move(public_path('/images/slideshows/') , $name);
        $slideShow = Slideshow::create([
            'img' => $name ,
            'link' => $request->link ,
            'main_id' => $request->main_id ,
            'third_id' => $request->third_id ,
        ]);
        $slideShow['image_link'] = "/images/slideshows/{$name}" ;

        $number = Slideshow::all()->count();
        if ($number > 3 )
        {
            $deactivefiles = Slideshow::orderBy('id' , 'ASC')->take($number - 3);

            foreach ($deactivefiles->get() as $activeFile)
            {
                $name = $activeFile->img;
                File::delete("/images/slideshows/{$name}");
                $activeFile->delete();
            }
        }

        return $slideShow;
    }

    public function show()
    {
        $slide = Slideshow::latest('id')->take(3)->get();
        $arr = [];
        foreach ($slide as $key => $item)
        {
            $arr[$key] = $item;
            $arr[$key]['image_link'] = "/images/slideshows/{$item->img}" ;
        }

        return new JsonResponse($arr);
    }
}
