<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelAPIController extends Controller
{

    public function index()
    {
        $artikels=Artikel::all();

        return $artikels;
    }



    public function store(Request $request)
    {
        $input = $request->all();

        $artikel=Artikel::create($input);

        return $artikel;
    }


    public function show($id)
    {
        $artikel=Artikel::find($id);

        return $artikel;
    }


    public function update(Request $request, $id)
    {   
        $input=$request->all();

        $artikel=Artikel::find($id);

        if(empty($artikel)){
            return response()->json(['messege'=>'Data Tidak Ditemukan'], 404);
        }
        
        $artikel->update($input);

        return $artikel;
    }


    public function destroy($id)
    {
        $artikel=Artikel::find($id);

        if(empty($artikel)){
            return response()->json(['messege'=>'Data Tidak Ditemukan'], 404);
        }

        $artikel->delete();

        return response()->json(['messege'=>'Data Telah Dihapus']);

    }
}
