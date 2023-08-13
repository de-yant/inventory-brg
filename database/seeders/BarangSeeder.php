<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'barang_gambar' => 'default.png',
            'jenis_id'      => 1,
            'satuan_id'     => 1,
            'merk_id'       => 1,
            'barang_kode'   => 'BRG-08120001',
            'barang_nama'   => 'Matras',
            'barang_harga'  => 45000,
            'barang_stok'   => 0,
            'barang_masuk'  => 0,
            'barang_keluar' => 0,
            'barang_ket'    => 'Matras untuk tidur',
        ]);
    }
}
