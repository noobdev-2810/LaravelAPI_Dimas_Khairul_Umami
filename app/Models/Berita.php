<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table="berita";

    protected $fillable=[
        'judul','isi','users_id','kategori_berita_id'
    ];

    public function kategoriBerita(){
        return $this->belongsTo(\App\kategoriBerita::class,'kategori_Berita_id','id');
    }

    public function user(){
        return $this->belongsTo(\App\kategoriBerita::class,'users_id','id');
    }
}
