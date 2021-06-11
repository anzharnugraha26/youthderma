<?php

namespace App\Http\Controllers\Shop;

use App\DetailOrder;
use App\Http\Controllers\Controller;
use App\Keranjang;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $order = DB::table('orders')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->select('orders.*', 'status_order.name')
        ->where('orders.status_order_id', 1)
        ->where('orders.user_id', $userId)->get();
        $dicek = DB::table('orders')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->select('orders.*', 'status_order.name')
        ->where('orders.status_order_id', '!=', 1)
        ->Where('orders.status_order_id', '!=', 5)
        ->Where('orders.status_order_id', '!=', 6)
        ->where('orders.user_id', $userId)->get();
        $histori = DB::table('orders')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->select('orders.*', 'status_order.name')
        ->where('orders.status_order_id', '!=', 1)
        ->Where('orders.status_order_id', '!=', 2)
        ->Where('orders.status_order_id', '!=', 3)
        ->Where('orders.status_order_id', '!=', 4)
        ->where('orders.user_id', $userId)->get();
        $data = array(
                'order' => $order,
                'dicek' => $dicek,
                'histori'=> $histori
                );
        // dd($data);
        return view('shop.order.index', $data);
    }

    public function store(Request $request)
    {
        $order =  Order::create([
            'invoice' => $request->invoice,
                'user_id' => Auth::user()->id,
                'phone' => $request->no_hp,
                'subtotal'=> $request->subtotal,
                'status_order_id' => 1,
                'metode_pembayaran' => "trf",
                'ongkir' => $request->ongkir,
                // 'pesan' => "test"
        ]);

        $order = Order::where('invoice', $request->invoice)->first();
        $barang = Keranjang::where('user_id', Auth::user()->id)->get();
        foreach ($barang as  $brg) {
            DetailOrder::create([
                'order_id' => $order->id,
                'product_id' => $brg->products_id,
                'qty' => $brg->qty,
            ]);
        }
        
        Keranjang::where('user_id', Auth::user()->id)->delete();

        $data = array(
            'invoice' => $order->invoice,
            'subtotal' => $order->subtotal,
            'date' => date('Ymd')
        );
        
       
        // Mail::send('email', $data, function ($message) {
        //     $message->from(Auth::user()->email, Auth::user()->email);
        //     $message->to('youthderma@gmail.com', 'Youthderma aesthetic Clinic');
        //     $message->subject('Pesanan dari  :' . Auth::user()->email, Auth::user()->email);
        // });


        return redirect('/shop/order');
        // dd($order);
    }




}
