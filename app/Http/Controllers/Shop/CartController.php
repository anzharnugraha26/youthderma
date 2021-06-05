<?php

namespace App\Http\Controllers\Shop;

use App\Alamat;
use App\Http\Controllers\Controller;
use App\Keranjang;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $alamat = DB::table('alamats')->where('user_id', $userId)->count();
            $items = Keranjang::where("user_id", $userId)->get();
            return view('shop.cart', compact('items', 'alamat'));
        } else {
            return redirect('/login')->with('chart', "empty");
        }
    }

   
    public function create()
    {
    }


    public function store(Request $request, $id)
    {
        // $keranjang = Keranjang::get();
        $product_id = Keranjang::where('products_id', $id)->first();
        if (empty($product_id)) {
            Keranjang::create([
                "user_id" => Auth::user()->id,
                "products_id" => $request->product_id,
                "qty" => $request->qty
            ]);
            return redirect()->back()->with('add-to', "empty");
        } else {
            $quantity = $product_id->qty * 1;
            $currentquantity = $request->qty + $quantity;
            Keranjang::where('products_id', $id)->update(array('qty' =>  $currentquantity));
            return redirect()->back()->with('add-to', "empty");
        }
  
        return redirect()->back();

        // $params  = $request->except('_token');
        // $item = [
        //     'id' => $params['product_id'],
        //     'quantity' => $params['quantity'],
        //     'name' => $params['product_name'],
        //     'price' => $params['product_price'],
        //     'weight' => $params['weight']
        // ];
        // $userId = Auth::user()->id;
        // $cart = \Cart::session($userId)->add($item);
        // return redirect()->back();
    }

   
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

 
    public function update(Request $request)
    {
        $index = 0;
        foreach ($request->id as $id) {
            $keranjang = Keranjang::findOrFail($id);
            $keranjang->qty = $request->qty[$index];
            $keranjang->save();
            $index++;
        }
        
        return redirect()->back();
    }

    public function destroy($id)
    {
        Keranjang::destroy($id);
        
        return redirect()->back();
        // $userId = auth()->user()->id;
        // \Cart::session($userId)->remove($id);
        // return redirect()->back();
    }
}
