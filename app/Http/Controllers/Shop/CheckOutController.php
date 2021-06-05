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
        $userId = auth()->user()->id;


        $province = Province::get();
        $provinces = Province::pluck('name', 'province_id');
        $city = City::get();
        $keranjang = Keranjang::where('user_id', $userId)->first();
        
        if (empty($keranjang)) {
            return redirect()->back();
        }

        return view('shop.checkout');
        // $items = \Cart::session($userId)->getContent();
        // $berat =  100 ;
        // $city = DB::table('alamats')->where('user_id', $userId)->get();
        // $city_destination =  $city[0]->cities_id;
        // $cost = RajaOngkir::ongkosKirim([
        //     'origin'  => 17,
        //     'destination' => $city_destination,
        //     'weight' => $berat,
        //     'courier' => 'jne'
        // ])->get();
        
        // $ongkir =  $cost[0]['costs'][0]['cost'][0]['value'];
        // $alamat_user = DB::table('alamats')
        // ->join('cities', 'cities.city_id', '=', 'alamats.cities_id')
        // ->join('provinces', 'provinces.province_id', '=', 'cities.province_id')
        // ->select('alamats.*', 'cities.name as kota', 'provinces.name as prov')
        // ->where('alamats.user_id', $userId)
        // ->first();
        
        // //buat kode invoice sesua tanggalbulantahun dan jam
        // $data = [
        //     'invoice' => 'ALV'.Date('Ymdhi'),
        //     'keranjangs' => \Cart::session($userId)->getContent(),
        //     'ongkir' => $ongkir,
        //     'alamat' => $alamat_user
        // ];
        // dd($data);

        // return view('shop.checkout', compact('items', 'province', 'city', 'provinces'));
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
