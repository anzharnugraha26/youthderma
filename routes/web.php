<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' ,'FrontEndController@index');
Route::get('/treatment' ,'FrontEndController@treatment');
Route::get('/doctor' ,'FrontEndController@doctor');
Route::get('/product' ,'FrontEndController@product');
Route::get('/product-detail/{id}' ,'FrontEndController@detailproduct');
Route::post('/savebooking' ,'FrontEndController@saveBooking');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
