<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// categories
Route::get('/mainCat' , 'CategoryController@main');
Route::get('/indexCat' , 'CategoryController@index');
Route::post('/create/cat' , 'CategoryController@create');
Route::post('/update/cat/{id}/{type}' , 'CategoryController@update');
Route::get('/cat/{id}/{type}' , 'CategoryController@single');
Route::get('/{id}/all' , 'CategoryController@all');
Route::get('/all/third' , 'CategoryController@all_third');
Route::get('/menu' , 'CategoryController@menu');

//brands
Route::post('/create/brand' , 'BrandController@store');
Route::get('/{id}/findBrands' , 'BrandController@findBrands');
Route::get('/brands' , 'BrandController@index');

//discounts
Route::post('/create/discount' , 'DiscountController@create');
Route::get('/index/discount' , 'DiscountController@index');
Route::get('/check/discounts' , 'DiscountController@check');
Route::post('/create/special_discount' , 'SpecialDiscountController@create');
Route::post('/use/special_discount' , 'SpecialDiscountController@use');
Route::get('/index/special_discount' , 'SpecialDiscountController@index');
Route::post('/use/discount' , 'DiscountController@use')->middleware('auth:api');

//settings
Route::post('/setting' , 'SettingController@update');
Route::post('/setting/app' , 'SettingController@application');
Route::post('/setting/app/image' , 'SettingController@applicationImage');
Route::get('/setting/index' , 'SettingController@index');
Route::post('/logo' , 'SettingController@logo');

//users
Route::get('/users' , 'UserController@index')->middleware('auth:api');
Route::post('/sendMessage' , 'UserController@sendMessage');
Route::post('/forgetPassword' , 'UserController@forgetPassword');
Route::post('/forgetPassword/verify' , 'UserController@forgetPassword_verify');
Route::post('/login' , 'UserController@login');
Route::post('/getcode' , 'UserController@getCode');
Route::post('/verification' , 'UserController@verificationTheCode');
Route::post('/{id}/deleteUser' , 'UserController@deleteUser');
Route::get('/peyks' , 'UserController@peyks');
Route::post('/edit' , 'UserController@edit')->middleware('auth:api');
Route::post('/latlng' , 'UserController@latlng')->middleware('auth:api');
Route::post('/orders' , 'UserController@orders')->middleware('auth:api');
Route::post('/changePassword' , 'UserController@changePassword')->middleware('auth:api');
Route::get('/user' ,function (){
    $user = auth()->user();
    $user['notifications'] = $user->unreadNotifications;
    return auth()->user();
})->middleware('auth:api');



//zarinpal
Route::post('/zarinpal/request' , 'PayController@zarinPal_request');



//products
Route::post('/search/{param}' , 'ProductController@search');
Route::get('/product/{id}' , 'ProductController@show');
Route::get('/index' , 'ProductController@index');
Route::post('/product/edit/{id}' , 'ProductController@edit');
Route::post('/store' , 'ProductController@store');
Route::get('/mostSale' , 'ProductController@mostSale');
Route::post('/filters/brands' , 'ProductController@filterByBrands');
Route::post('/isAvailable' , 'ProductController@isAvailable');
Route::get('/filters/category/{id}/{param}' , 'ProductController@filterByCategory');
Route::get('/filters/category/{main}/{sec}/{param}' , 'ProductController@productsBySecondCat');
Route::get('/filters/category/{main}/{third}/third/{param}' , 'ProductController@productsByThirdCat');

//slideShows
Route::post('/create/slideshow' , 'SlideshowController@create');
Route::get('/show/slideshow' , 'SlideshowController@show');

//search
Route::post('/search/{table}/{param}' , 'searchController@search');
Route::get('/{table}/{id}/delete' , 'searchController@deleteEverything');
//Route::post('/test' , 'searchController@test');

//orders
Route::post('/order/create' , 'OrderController@create')->middleware('auth:api');
Route::get('/orders' , 'OrderController@index')->middleware('auth:api');
Route::get('/check/order/{id}' , 'OrderController@show')->middleware('auth:api');
Route::get('/user/orders' , 'OrderController@userOrders')->middleware('auth:api');
Route::post('/find/products/order' , 'OrderController@find');
Route::post('/verify/order/{id}' , 'OrderController@verify');
Route::post('/order/set_delivery/{id}' , 'OrderController@set_delivery_man')->middleware('auth:api');
Route::get('/order/markasread' , 'OrderController@markAsRead')->middleware('auth:api');


//baners
Route::get('/baners' , 'BanerController@index');
Route::post('/update/baner/{id}' , 'BanerController@update');
Route::get('/productsPage/baner' , 'BanerController@showProductsPageBaner');


//for android app
Route::post('/register' , 'UserController@registerForApp');
Route::post('/app/verifyCode' , 'UserController@verificationTheCodeForApp');
Route::post('/app/getcode' , 'UserController@getCodeForApp');
Route::get('/newProducts' , 'ProductController@newProductsForApp');
Route::get('/mostDiscounted' , 'ProductController@mostDiscountedForApp');
Route::post('/price/filter' , 'ProductController@productsByPriceForApp');
Route::post('/app/filters/category/{main}/{third}/third' , 'ProductController@productsByThirdCatForApp');
Route::post('/app/search' , 'ProductController@searchForApp');
Route::get('/app/get_products/{id}' , 'ProductController@getProductsForApp');
Route::get('/app/get_products1/{id}' , 'ProductController@getProductsForApp1');