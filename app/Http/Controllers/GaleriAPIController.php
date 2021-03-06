<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriAPIController extends Controller
{
    public function index()
    {
        $galeris=Galeri::all();

        return $galeris;
    }


    public function store(Request $request)
    {
        $input = $request->all();

        $galeri=Galeri::create($input);

        return $galeri;
    }


    public function show($id)
    {
        $galeri=Galeri::find($id);

        return $galeri;
    }


    public function update(Request $request, $id)
    {
        $input=$request->all();

        $galeri=Galeri::find($id);

        if(empty($galeri)){
            return response()->json(['messege'=>'Data Tidak Ditemukan'], 404);
        }
        
        $galeri->update($input);

        return $galeri;
    }


    public function destroy($id)
    {
        $galeri=Galeri::find($id);

        if(empty($galeri)){
            return response()->json(['messege'=>'Data Tidak Ditemukan'], 404);
        }

        $galeri->delete();

        return response()->json(['messege'=>'Data Telah Dihapus']);

    }
}
