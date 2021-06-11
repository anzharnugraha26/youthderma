<?php

namespace App\Http\Controllers\Shop;

use App\City;
use App\Http\Controllers\Controller;
use App\Keranjang;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            # code...
            $userId = auth()->user()->id;
            $province = Province::get();
            $provinces = Province::pluck('name', 'province_id');
            $city = City::get();
            $items = DB::table('keranjangs')
        ->join('users', 'users.id', '=', 'keranjangs.user_id')
        ->join('products', 'products.id', '=', 'keranjangs.products_id')
        ->select('products.name as name_produk', 'products.image', 'products.image', 'products.weight', 'users.name', 'keranjangs.*', 'products.price')
        ->where('keranjangs.user_id', '=', $userId)->get();
 
        $count = Keranjang::where('user_id', $userId)->count();
            if (empty($count)) {
                return redirect()->back();
            } else{
                $beratTotal = 0;
                foreach ($items as $k) {
                    $berat = $k->weight * $k->qty ;
                    $beratTotal = $beratTotal + $berat;
                }
                $city = DB::table('alamats')->where('user_id', $userId)->get();
                $city_dest = $city[0]->cities_id;
                $cost = RajaOngkir::ongkosKirim([
            'origin' => 457,
            'destination' => $city_dest,
            'weight' => $beratTotal,
            'courier' => 'jne'
            ])->get();
                //dd($cost);
                $ongkir =  $cost[0]['costs'][0]['cost'][0]['value'];

                $alamat_user = DB::table('alamats')
        ->join('cities', 'cities.city_id', '=', 'alamats.cities_id')
        ->join('provinces', 'provinces.province_id', '=', 'cities.province_id')
        ->select('alamats.*', 'cities.name as kota', 'provinces.name as prov')
        ->where('alamats.user_id', $userId)
        ->first();

                $data = [
            'invoice' => 'YSC'.Date('Ymdhi'),
            'keranjangs' => $items,
            'ongkir' => $ongkir,
            'alamat' => $alamat_user
        ];
                return view('shop.checkout', $data);
            }
        } else {
            return redirect('login');
        }
    }

   
    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('name', 'city_id');
        return response()->json($city);
    }


    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => 457, // ID kota/kabupaten asal
            'destination'   => $request->city_destination, // ID kota/kabupaten tujuan
            'weight'        => $request->weight, // berat barang dalam gram
            'courier'       => $request->courier // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();


        return response()->json($cost);
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
