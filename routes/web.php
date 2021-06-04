<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('auth/google', 'GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'GoogleController@handleGoogleCallback');

Route::get('getProvince', 'OngkirController@index');
Route::get('getCity', 'OngkirController@create');
Route::get('cekShiping', 'OngkirController@check');

Route::get('/ongkir', 'CheckOngkirController@index');
// Route::post('/ongkir', 'CheckOngkirController@check_ongkir');
Route::post('/ongkir', 'CheckOngkirController@check_ongkir');
Route::get('/cities/{province_id}', 'CheckOngkirController@getCities');


Route::get('/' ,'FrontEndController@index');
Route::get('/treatment' ,'FrontEndController@treatment');
Route::get('/doctor' ,'FrontEndController@doctor');
Route::get('/product' ,'FrontEndController@product');
Route::get('/about-us' ,'FrontEndController@about');
Route::get('/product-detail/{id}' ,'FrontEndController@detailproduct');
Route::post('/savebooking' ,'FrontEndController@saveBooking');


Auth::routes(['verify' => true]);
Route::group(['prefix' => 'shop'], function () {
    Route::get('/', 'Shop\ShopController@index');
    Route::get('/product-detail/{id}', 'Shop\ShopController@productDetail');

    Route::get('/carts' , 'Shop\CartController@index');
    Route::get('/cart/remove/{id}', 'Shop\CartController@destroy'); 
    Route::post('carts', 'Shop\CartController@store'); 
    Route::post('/carts/update', 'Shop\CartController@update');

    Route::get('add-address', 'Shop\AlamatController@index');
    Route::get('getcity/{id}', 'Shop\AlamatController@getCity');
    Route::post('savealamat', 'Shop\AlamatController@saveAlamat');

    Route::get('check-out', 'Shop\CheckOutController@index');
    Route::get('check-out/getcities/{id}', 'Shop\CheckOutController@getCities');
});

Route::group(['middleware' => ['auth', 'checkRole:admin'],  'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\AdminController@index');
    
    Route::get('/booking', 'Admin\AdminController@booking');

    //product
    Route::resource('product', 'Admin\ProductController');
    Route::post('product/store', 'Admin\ProductController@store');
    Route::get('product/destroy/{id}', 'Admin\ProductController@destroy');
    Route::get('product/edit/{id}', 'Admin\ProductController@edit');
    Route::post('product/update/{id}', 'Admin\ProductController@update');
    // Route::get('/home', 'HomeController@index');
});

Route::get('/logout', 'HomeController@logout');
