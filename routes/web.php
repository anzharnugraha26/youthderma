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
Route::get('/detail-treatment/{id}' ,'FrontEndController@detailtreatment');

Route::get('/doctor' ,'FrontEndController@doctor');
Route::get('/product' ,'FrontEndController@product');
Route::get('/about-us' ,'FrontEndController@about');
Route::get('/product-detail/{id}' ,'FrontEndController@detailproduct');
Route::post('/savebooking' ,'FrontEndController@saveBooking');
Route::get('midtrans', 'MidtransController@index');


Auth::routes(['verify' => true]);
Route::group(['prefix' => 'shop'], function () {
    Route::get('/', 'Shop\ShopController@index');
    Route::get('products', 'Shop\ShopController@product');
    Route::get('/product-detail/{id}', 'Shop\ShopController@productDetail');
    Route::get('/carts' , 'Shop\CartController@index');
    Route::post('add-carts/{id}', 'Shop\CartController@store'); 
    Route::get('contact-us', 'Shop\ShopController@kontakUs');
    Route::get('gallery', 'Shop\ShopController@gallery');
});

Route::group(['middleware' => ['auth'],  'prefix' => 'shop'], function () { 
    Route::get('/cart/remove/{id}', 'Shop\CartController@destroy'); 
    Route::post('/carts/update', 'Shop\CartController@update');

    Route::get('add-address', 'Shop\AlamatController@index');
    Route::get('edit-address/{id}', 'Shop\AlamatController@edit');
    Route::post('updatealamat/{id}', 'Shop\AlamatController@update');

    Route::get('getcity/{id}', 'Shop\AlamatController@getCity');
    Route::post('savealamat', 'Shop\AlamatController@saveAlamat');

    Route::get('check-out', 'Shop\CheckOutController@index');
    Route::get('check-out/getcities/{id}', 'Shop\CheckOutController@getCities');

    Route::post('order-simpan', 'Shop\OrderController@store');
    Route::get('order/konfirmasi/{id}', 'Shop\OrderController@bayar');
    Route::get('order', 'Shop\OrderController@index');

    Route::post('/bukti-bayar/{id}', 'Shop\OrderController@kirimBukti');
    Route::get('/order-detail/{id}', 'Shop\OrderController@show');
    Route::get('/pesanan-diterima/{id}', 'Shop\OrderController@pesananditerima');
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

    Route::get('treatment', 'Admin\TreatmentController@index');
    Route::get('treatment/edit/{id}', 'Admin\TreatmentController@edit');
    Route::post('treatment/update/{id}', 'Admin\TreatmentController@update');

    Route::get('transaksi', 'Admin\TransaksiController@index');
    Route::get('transaksi-perlu-dicek', 'Admin\TransaksiController@perludicek');
    Route::get('transaksi-perlu-dikirim', 'Admin\TransaksiController@perludikirim');
    Route::get('transaksi-dikirim', 'Admin\TransaksiController@dikirim');
    Route::get('transaksi-selesai', 'Admin\TransaksiController@selesai');
    Route::get('transaksi-detail/{id}', 'Admin\TransaksiController@detail');
    Route::get('transaksi/konfirmasi/{id}','Admin\TransaksiController@konfirmasi');
    Route::post('/input-resi/{id}','Admin\TransaksiController@inputresi');
    // Route::get('/home', 'HomeController@index');
});

Route::get('/logout', 'HomeController@logout');
