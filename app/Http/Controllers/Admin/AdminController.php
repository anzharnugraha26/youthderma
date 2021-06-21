<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('admin.index');
    }

   
    public function booking()
    {
        $booking = Booking::all();
        return view('admin.booking.index', compact('booking'));
    }

    public function detailbooking($id)
    {
        $booking = Booking::where('id', $id)->first();
        return view('admin.booking.detail', compact('booking'));
    }

   
    public function store(Request $request)
    {
        //
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
