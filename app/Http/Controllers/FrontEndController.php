<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('front-end.index');
    }

    
    public function treatment()
    {
        return view('front-end.treatment');
    }

    public function doctor()
    {
        return view('front-end.doctor');
    }

    public function product()
    {
        $product = Product::all();
        return view('front-end.product', compact('product'));
    }

    public function about()
    {
        return view('front-end.about');
    }

    public function detailproduct($id)
    {
        $product = Product::where('id', $id)->first();
        return view('front-end.detail-product', compact('product')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveBooking(Request $request)
    {
        Booking::create($request->all());
        return redirect()->back()->with("with", "aaaaaaaa");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
