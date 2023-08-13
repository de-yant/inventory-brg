<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merks')->insert([
            'merkbarang_nama' => 'Baby Melly',
            'merkbarang_ket' => 'Merk Barang Baby Melly',
        ]);

        DB::table('merks')->insert([
            'merkbarang_nama' => 'Baby Safe',
            'merkbarang_ket' => 'Merk Barang Baby Safe',
        ]);

        DB::table('merks')->insert([
            'merkbarang_nama' => 'Baby Belle',
            'merkbarang_ket' => 'Merk Barang Baby Belle',
        ]);
    }
}
