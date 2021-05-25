<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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


    public function saveBooking(Request $request)
    {
        $booking = Booking::create($request->all());
        $data = array(
            'name' => $booking->name,
            'email' => $booking->email,
            'date' => $booking->date,
            'theratment' => $booking->threatment,
            'dr' => $booking->doctor,
            'phone' => $booking->phone
        );
        


        Mail::send('email', $data  , function ($message) use($booking) {
            $message->from($booking->email, $booking->email);
            $message->sender($booking->email, '$request->email');
            $message->to('youthderma@gmail.com', 'Youthderma aesthetic Clinic');
            $message->subject('treatement :' . $booking->threatment);
            $message->setBody('treatement :' . $booking->threatment);
        });
        return redirect()->back()->with("with", "aaaaaaaa");
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
