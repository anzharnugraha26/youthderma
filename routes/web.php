<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('auth/google', 'GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'GoogleController@handleGoogleCallback');

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
});

Route::group(['middleware' => ['auth', 'checkRole:admin'],  'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::get('/booking', 'Admin\AdminController@booking');
    Route::resource('product', 'Admin\ProductController');
    // Route::get('/home', 'HomeController@index');
});

Route::get('/logout', 'HomeController@logout');
