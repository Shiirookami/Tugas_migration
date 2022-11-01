<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create('id_ID');
        //
        $kelas = array('A','B','C','D');
        $dosen = Dosen::inRandomOrder()->first();
        $matkuls = MataKuliah::inRandomOrder()->first();
        foreach ($kelas as $value) {
            DB::table('jadwal')->insert(
                    [
                    'kode_matakuliah'=>$matkuls->kode_matakuliah,
                    'nidn'=>$dosen->nidn,
                    'kelas'=>$value,
                    'hari'=>$faker->randomElement(['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']),
                    'jam'=>$faker->randomElement(["08:00:00" , "10:30:00" , "13:00:00"]),
                    'created_at'=> \Carbon\Carbon::now(),
                    'updated_at'=> \Carbon\Carbon::now()
                    ]
                );    
            }
    }
}
