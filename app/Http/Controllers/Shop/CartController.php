<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
   
    public function index()
    {
       $items = \Cart::getContent();
       return $items;
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
