<?php

namespace App\Http\Controllers;

use App\Province;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class OngkirController extends Controller
{
    
    // public function index()
    // {
    //     $clients = new Client() ;
    //     try {
    //        $response = $clients->get('https://api.rajaongkir.com/starter/province', 
    //         array(
    //             'headers' => array('key' => 'a185676a30341eb19f33d2fbf93c7613',)
    //         )
    //     );
    //     } catch (RequestException $e) {
    //        var_dump($e->getResponse()->getBody()->getContents());
    //     }

    //     $json = $response->getBody()->getContents();
    //     $array_result = json_decode($json, true);

    //     // print_r($array_result);
    //     // echo $array_result["rajaongkir"]["results"][1]["province"];
    //     for($i = 0; $i < count($array_result["rajaongkir"]["results"]); $i++);
    //     {
    //         $province = new \App\Province;
    //         $province->id = $array_result["rajaongkir"]["results"][$i]["province_id"];
    //         $province->name = $array_result["rajaongkir"]["results"][$i]["province"];
    //         $province->save();
    //     }
    // }

   
    // public function create()
    // {
    //     $clients = new Client() ;
    //     try {
    //        $response = $clients->get('https://api.rajaongkir.com/starter/city', 
    //         array(
    //             'headers' => array('key' => 'a185676a30341eb19f33d2fbf93c7613',)
    //         )
    //     );
    //     } catch (RequestException $e) {
    //        var_dump($e->getResponse()->getBody()->getContents());
    //     }

    //     $json = $response->getBody()->getContents();
    //     $array_result = json_decode($json, true);

    //     print_r($array_result);
    //     // echo $array_result["rajaongkir"]["results"][1]["province"];
    // }

    // public function check()
    // {
    //     $clients = new Client() ;
    //     try {
    //        $response = $clients->request('POST' , 'https://api.rajaongkir.com/starter/cost', 
    //         [
    //             'body' => 'origin=501&destination=114&weight=1700&courier=jne',
    //             'headers' => 
    //                 [
    //                     'key' => 'a185676a30341eb19f33d2fbf93c7613',
    //                     'content-type' => 'application/x-www-form-urlencoded',
    //                 ]
    //         ],

           
    //     );
    //     } catch (RequestException $e) {
    //        var_dump($e->getResponse()->getBody()->getContents());
    //     }

    //     $json = $response->getBody()->getContents();
    //     $array_result = json_decode($json, true);

    //     // print_r($array_result);
    //      echo $array_result["rajaongkir"]["results"][0]["costs"][1]["cost"][0]["value"];
    // }

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
