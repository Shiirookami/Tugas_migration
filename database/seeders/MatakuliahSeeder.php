<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run(){
    $faker = Faker::create('id_ID');
    $matkul = array('pbo','PWL','Pemrograman Dasar','Piranti Bergerak','Jarkom','Imk','Kalkulus');
    foreach ($matkul as $value) {
        DB::table('matakuliah')->insert(
                [
                'kode_matakuliah'=>rand(552000,5521000),
                'nama_matakuliah'=>$value,
                'sks'=>$faker->randomELement(['1','2','3']),
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now()
                ]
            );    
        }
    }
}
