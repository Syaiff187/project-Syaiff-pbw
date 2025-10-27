<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'name' => "Imam webing" ,
            'nim' => 1452882675,
            'prodi' => "Teknologi Informasi",
            'email' => "imamcuy@gmail.com",
            'nohp' => 62983788990,
        ]);
    }
}
