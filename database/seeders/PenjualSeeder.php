<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penjuals')->insert([
            'penjual_nama' => 'Ridha',
            'penjual_alamat' => 'Jl. Raya Kedung Turi No. 1',
            'penjual_telp' => '081234567890',
        ]);

        DB::table('penjuals')->insert([
            'penjual_nama' => 'Rizky',
            'penjual_alamat' => 'Jl. Raya Bandung Barat No. 12',
            'penjual_telp' => '081234567890',
        ]);

        DB::table('penjuals')->insert([
            'penjual_nama' => 'Fauzan',
            'penjual_alamat' => 'Jl. Raya Jakarta No. 1',
            'penjual_telp' => '081234567890',
        ]);
    }
}
