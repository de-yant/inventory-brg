<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis')->insert([
            'jenisbarang_nama' => 'Gendongan',
            'jenisbarang_ket' => 'Jenis Barang Gendongan',
        ]);

        DB::table('jenis')->insert([
            'jenisbarang_nama' => 'Pakaian',
            'jenisbarang_ket' => 'Jenis Barang Pakaian',
        ]);
    }
}
