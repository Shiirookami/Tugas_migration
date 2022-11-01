<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Dosen;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i<10; $i++){
            $dosen = Dosen::inRandomOrder()->first();
            DB::table('mahasiswa')->insert(
                [
                'npm'=>rand(0000000000,9999999999),
                'nama'=>$faker->name,
                'nidn'=>$dosen->nidn,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now()
                ]
            );    
        }
    }
}
