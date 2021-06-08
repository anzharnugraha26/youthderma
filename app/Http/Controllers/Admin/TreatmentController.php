<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    
    public function index()
    {
        $t = Treatment::all();
        return view('admin.treatment.index', compact('t'));
    }


    public function create()
    {
        //
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
        $t = Treatment::where('id', $id)->first();
        return view('admin.treatment.edit', compact('t'));
    }


    public function update(Request $request, $id)
    {
        $product = Treatment::find($id);
        if ($request->hasFile('image')) {
            // if (file_exists('image/product/' . $product->image)) {
            //     unlink('image/services/' . $product->image);
            // }
            $file = str_replace(' ', '', $request->image->getClientOriginalName());
            $fileName = date('mYdHs') . rand(1, 999) . '_' . $file;
            $request->image->move('image/services/', $fileName);
        } else {
            $fileName = $request->input('image_old');
        }
        Treatment::find($id)->update(array_merge(
            $request->all(),
            [
            'image'=> $fileName
            ]
        ));
        return redirect("/admin/treatment")->with('update', "a");
    }

 
    public function destroy($id)
    {
        //
    }
}
