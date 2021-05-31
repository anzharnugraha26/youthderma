<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $userId = auth()->user()->id;
            $items = \Cart::session($userId)->getContent();
            //    $items = \Cart::getContent();
            //    return $items;
            return view('shop.cart', compact('items'));
        }
        return redirect('/login');
    }

   
    public function create()
    {
        
    }


    public function store(Request $request)
    {
        $params  = $request->except('_token');
        $item = [
            'id' => $params['product_id'],
            'quantity' => $params['quantity'],
            'name' => $params['product_name'],
            'price' => $params['product_price']
        ];
        $userId = Auth::user()->id;
        $cart = \Cart::session($userId)->add($item);
        return redirect()->back();
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
