<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembelis')->insert([
            'pembeli_nama' => 'Rizky',
            'pembeli_alamat' => 'Jl. Raya Bekasi',
            'pembeli_telp' => '081234567890',
        ]);

        DB::table('pembelis')->insert([
            'pembeli_nama' => 'Imron',
            'pembeli_alamat' => 'Jl. Raya Cikarang',
            'pembeli_telp' => '081234567890',
        ]);

        DB::table('pembelis')->insert([
            'pembeli_nama' => 'Ahmad',
            'pembeli_alamat' => 'Jl. Raya Jakarta',
            'pembeli_telp' => '081234567890',
        ]);
    }
}
