<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('satuans')->insert([
            'satuanbarang_nama' => 'Pcs',
            'satuanbarang_ket' => 'Satuan Barang Pcs',
        ]);

        DB::table('satuans')->insert([
            'satuanbarang_nama' => 'Kg',
            'satuanbarang_ket' => 'Satuan Barang Kg',
        ]);

        DB::table('satuans')->insert([
            'satuanbarang_nama' => 'Lusin',
            'satuanbarang_ket' => 'Satuan Barang Lusin',
        ]);

        DB::table('satuans')->insert([
            'satuanbarang_nama' => 'Dus',
            'satuanbarang_ket' => 'Satuan Barang Dus',
        ]);
    }
}
