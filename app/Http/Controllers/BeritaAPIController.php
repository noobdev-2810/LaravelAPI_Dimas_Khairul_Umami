<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaAPIController extends Controller
{

    public function index()
    {
        $beritas=Berita::all();

        return $beritas;
    }


    public function store(Request $request)
    {
        $input = $request->all();

        $berita=Berita::create($input);

        return $berita;
    }


    public function show($id)
    {
        $berita=Berita::find($id);

        return $berita;
    }


    public function update(Request $request, $id)
    {
        $input=$request->all();

        $berita=Berita::find($id);

        if(empty($berita)){
            return response()->json(['messege'=>'Data Tidak Ditemukan'], 404);
        }
        
        $berita->update($input);

        return $berita;
    }


    public function destroy($id)
    {
        $berita=Berita::find($id);

        if(empty($berita)){
            return response()->json(['messege'=>'Data Tidak Ditemukan'], 404);
        }

        $berita->delete();

        return response()->json(['messege'=>'Data Telah Dihapus']);

    }
}
