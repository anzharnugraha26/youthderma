<?php

namespace App\Http\Controllers\Shop;

use App\Alamat;
use App\City;
use App\Http\Controllers\Controller;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlamatController extends Controller
{
   
    public function index()
    {
        //ambil session id user
        $id_user = Auth::user()->id;
        //ambil data alamat
        $data['province'] = Province::all();
        $cekAlamat =  DB::table('alamats')
                    ->where('user_id',$id_user)
                    ->count();
        //cek jika user sudah mengatur alamat maka jalankan ini
        if($cekAlamat >0){
            $data['alamats'] = DB::table('alamat')
            ->join('cities','cities.city_id','=','alamat.cities_id')
            ->join('provinces','provinces.province_id','=','cities.province_id')
            ->select('provinces.title as prov','cities.title as kota','alamat.*')
            ->where('alamat.user_id',$id_user)
            ->get();
            return view('shop.alamat.alamatada',$data);               
        }else{
            //jika belum maka tampilkan form untuk mengatur alamat
            return view('shop.alamat.alamat',$data);            
        }
    }

    public function getCity($id)
    {
        //mengambil data kota/kab
        $city = City::where('province_id',$id)->get();
        return response()->json($city); 
    }
   
    public function create()
    {
        //
    }

   
    public function saveAlamat(Request $request)
    {
       $alamat = Alamat::create([
            'cities_id' => $request->cities_id,
            'detail'    => $request->detail,
            'user_id'   => Auth::user()->id,
            'phone' => $request->phone
        ]);
        dd($alamat);
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
