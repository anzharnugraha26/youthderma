<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    
    public function index()
    {
        if (Auth::check()) {
            return view('shop.checkout');
        }
        return redirect('/login');
    }

   
    public function create()
    {
        //
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
