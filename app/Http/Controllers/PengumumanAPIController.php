<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanAPIController extends Controller
{
    public function index()
    {
        $pengumumans=Pengumuman::all();

        return $pengumumans;
    }


    public function store(Request $request)
    {
        $input = $request->all();

        $pengumuman=Pengumuman::create($input);

        return $pengumuman;
    }


    public function show($id)
    {
        $pengumuman=Pengumuman::find($id);

        return $pengumuman;
    }


    public function update(Request $request, $id)
    {
        $input=$request->all();

        $pengumuman=Pengumuman::find($id);

        if(empty($pengumuman)){
            return response()->json(['messege'=>'Data Tidak Ditemukan'], 404);
        }
        
        $pengumuman->update($input);

        return $pengumuman;
    }


    public function destroy($id)
    {
        $pengumuman=Pengumuman::find($id);

        if(empty($pengumuman)){
            return response()->json(['messege'=>'Data Tidak Ditemukan'], 404);
        }

        $pengumuman->delete();

        return response()->json(['messege'=>'Data Telah Dihapus']);

    }
}
