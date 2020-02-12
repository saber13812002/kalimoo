<?php

namespace App\Http\Controllers;

use App\MainCategory;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MainController extends Controller
{
    public function index()
    {
        $set = Setting::latest('id')->first();
        if (Route::currentRouteName() == 'index')
        {
            (new SettingController())->index();

            return view('index' , [
                'keywords' => $set->keywords ,
                'description' => $set->description ,
                'title' => $set->title
            ]);
        }

        else if (Route::currentRouteName() == 'main')
        {
            $cat = MainCategory::find(request()->route('any'));
            $keywords[0] = $cat->keywords;
            $arr[0] = $cat->name;
            $third = [];
            $second = [];
            $mainKeywords[0] = $set->keywords;
            foreach ( $cat->secondaryCategories as $item)
            {
                $second[] = $item->name;
            }
            foreach ($cat->thirdCategories as $item)
            {
                $third[] = $item->name;
            }

            return view('products' , [
                'keywords' => implode(',' , array_merge($arr , $second , $third , $keywords , $mainKeywords)) ,
                'title' => 'محصولات'
            ]);
        }

        else if (Route::currentRouteName() == 'second')
        {
            $cat = MainCategory::find(request()->route('any'));
            $keywords[0] = $cat->keywords;
            $arr[0] = $cat->name;
            $third = [];
            $second = [];
            $mainKeywords[0] = $set->keywords;
            foreach ( $cat->secondaryCategories as $item)
            {
                $second[] = $item->name;
            }
            foreach ($cat->thirdCategories as $item)
            {
                $third[] = $item->name;
            }

            return view('products' , [
                'keywords' => implode(',' , array_merge($arr , $second , $third , $keywords , $mainKeywords)) ,
                'title' => 'محصولات'
            ]);
        }

        else if (Route::currentRouteName() == 'third')
        {
            $cat = MainCategory::find(request()->route('any'));
            $keywords[0] = $cat->keywords;
            $arr[0] = $cat->name;
            $third = [];
            $second = [];
            $mainKeywords[0] = $set->keywords;
            foreach ( $cat->secondaryCategories as $item)
            {
                $second[] = $item->name;
            }
            foreach ($cat->thirdCategories as $item)
            {
                $third[] = $item->name;
            }

            return view('products' , [
                'keywords' => implode(',' , array_merge($arr , $second , $third , $keywords , $mainKeywords)) ,
                'title' => 'محصولات'
            ]);
        }
    }
}
