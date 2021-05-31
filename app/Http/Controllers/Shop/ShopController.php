<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    
    public function index()
    {
        $product = Product::all();
        return view("shop.index", compact('product'))->with("coming-soon", "test");
    }

    
    public function productDetail($id)
    {
        $product = Product::where('id', $id)->first();
        return view('shop.product_detail', compact('product'));
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
