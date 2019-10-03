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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/***************************Admin Routes*****************************/
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/','HomeController@admin')->name('admin');

    Route::group(['prefix'=>'banner'],function (){
        Route::get('/','BannerController@getBanner')->name('banner-list');
        Route::get('/add','BannerController@showBannerForm')->name('banner-add');

        Route::post('/submit','BannerController@submitPost')->name('banner-post');
        Route::post('/{id}','BannerController@submitPost')->name('banner-update');
        Route::get('/{id}','BannerController@showBannerForm')->name('banner-edit');
        Route::delete('/{id}','BannerController@deleteBanner')->name('banner-delete');

    });

});
/***************************Admin Routes*****************************/

/***************************Vendor Routes*****************************/
Route::group(['prefix'=>'vendor','middleware'=>['auth','vendor']],function (){
    Route::get('/','HomeController@vendor')->name('vendor');
});
/***************************Vendor Routes*****************************/

/***************************Customer Routes*****************************/
Route::group(['prefix'=>'customer','middleware'=>['auth','customer']],function (){
    Route::get('/','HomeController@customer')->name('customer');
});
/***************************Customer Routes*****************************/