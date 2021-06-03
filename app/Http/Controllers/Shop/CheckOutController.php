<?php

namespace App\Http\Controllers\Shop;

use App\City;
use App\Http\Controllers\Controller;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class CheckOutController extends Controller
{
    public function index()
    {
        $province = Province::get();
        $city = City::get();
        // if (Auth::check()) {
        //     return view('shop.checkout');
        // }
        // return redirect('/login');
        $userId = auth()->user()->id;
        if (\Cart::session($userId)->isEmpty()) {
            return redirect()->back();
        }

        
        $items = \Cart::session($userId)->getContent();
        return view('shop.checkout', compact('items', 'province', 'city'));
    }

   
    public function create()
    {
        //
    }

   
    public function prosesShiping(Request $request)
    {
        $clients = new Client() ;
        try {
            $response = $clients->request(
                'POST',
                'https://api.rajaongkir.com/starter/cost',
                [
                'body' => 'origin=457&destination='.$request->destination.'&weight=1700&courier=jne',
                'headers' =>
                    [
                        'key' => 'a185676a30341eb19f33d2fbf93c7613',
                        'content-type' => 'application/x-www-form-urlencoded',
                    ]
            ],
            );
        } catch (RequestException $e) {
            var_dump($e->getResponse()->getBody()->getContents());
        }

        $json = $response->getBody()->getContents();
        $array_result = json_decode($json, true);
        $origin = $array_result["rajaongkir"]["origin_details"]["city_name"];
        $destination = $array_result["rajaongkir"]["destination_details"]["city_name"];

        // print_r($array_result);
        //echo $array_result["rajaongkir"]["results"][0]["costs"][1]["cost"][0]["value"];
        return  $origin;
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
