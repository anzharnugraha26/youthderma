<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MidtransController extends Controller
{
    public function index(){
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-_2xX0vWWhx10xJ65p_xwGcsJ';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

      
        
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => 'Tn. ',
                'last_name' => Auth::user()->name,
                'email' => Auth::user()->email ,
                'phone' => '08111222333',
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('midtrans', compact('snapToken'));
        //dd($snapToken);
    }
}
