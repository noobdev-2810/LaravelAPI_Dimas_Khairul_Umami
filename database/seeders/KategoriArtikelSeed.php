<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\models\KategoriArtikel;
use Faker\Factory as Faker;


class KategoriArtikelSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('en_NZ');

        for($i=0; $i<=200; $i++){
            KAtegoriArtikel::create([
                'nama'=>$faker->name,
                'users_id'=>$faker->areaCode,
            ]);
        }
    }
}