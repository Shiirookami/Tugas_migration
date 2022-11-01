<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0;$i<=10;$i++){
            DB::table('dosen')->insert(
                [
                'nidn'=>rand(0000000000,9999999999),
                'nama'=>$faker->name,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now(),
                ]
            );    
        }
    }
}
