<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\User;

class BabSatuController extends Controller
{

    //Soal 1
    //Tampilkan artikel dengan id=17 dan users_id=160
    public function a1(){

        $artikels=Artikel::where('id',17)->where('users_id',160)->get();
 
        return $artikels;
    }

    //Soal 2
    //Tampilkan artikel dengan id=2 atau id=5
    public function a2(){

        $artikels=Artikel::where('id',12)->where('users_id',12)->get();
 
        return $artikels;
    }

     // //Soal 3
    //Tampilkan artikel dengan id=3 dan user dengan nama  =Aslijan Megantara
    public function a3(){
        $artikels=Artikel::where('id',3)->whereHas('user',function($query){
            $query->where('name','Luis Saefullah ');
        })->with('user')->get();
        return $artikels;
    }
    // //Soal 4
     //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id=269
     public function a4(){
         $pengumumans=Pengumuman::whereHas('user',function($query){
             $query->whereHas('galeris',function ($query){
                 $query->where('id',39 );
             });
         })->with('user.galeris')->get();

         return $pengumumans;
        }
}
