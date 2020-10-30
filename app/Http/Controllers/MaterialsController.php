<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MaterialsController extends Controller
{
    public function index()
    {


        $material = \App\Material::where('ownerid', auth()->id())->paginate(2);

        return view('user.material',compact('material'));
    }
    public function show($material)
    {
       $material =  \App\Material::where('id',$material)->firstOrFail();

       return view('user.show', compact('material'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function store()
    {
        $data = request()->validate([
            'material_type' => 'required',
            'barcode' => 'required',
            'color' => 'required|string',
            'length' => 'required|integer',
            'diametr' => 'required|integer',
            'image' => 'required|file|image'
        ]);

        $user_id = auth()->id();

        $insert = new \App\Material();
        $insert->material_type = request('material_type');
        $insert->barcode = request('barcode');
        $insert->color = request('color');
        $insert->length = request('length');
        $insert->diametr = request('diametr');
        $insert->image = request('image')->store('upload','public');
        $insert->ownerid = $user_id;
        $insert->save();

        return redirect()->action('MaterialsController@index');
    }
    public function edit(\App\Material $material)
    {
        return view('user.edit',compact('material'));
    }
    public function update(\App\Material $material)
    {
        $data = request()->validate([
            'material_type' => 'required',
            'barcode' => 'required',
            'color' => 'required|string',
            'length' => 'required|integer',
            'image' => 'string|file'
        ]);

        $material->update($data);
        return redirect('materials/'. $material->id);


    }

    public function destroy(\App\Material $material)
    {
        $image_path = $material->image;
        $url = Storage::url($image_path);
        unlink("C:/OpenServer/OSPanel/domains/Inventory/public".$url);
        $material->delete();
        return redirect('materials/');
    }

}
