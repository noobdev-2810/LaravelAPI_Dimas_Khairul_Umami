<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table="pengumuman";

    protected $fillable=[
        'judul','isi','users_id','kategori_pengumuman_id'
    ];

    public function kategoriPengumuman(){
        return $this->belongsTo(\App\kategoriPengumuman::class,'kategori_pengumuman_id','id');
    }

    public function user(){
        return $this->belongsTo(\App\kategoriPengumuman::class,'users_id','id');
    }
}
