<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //user
        $this->call([UserSeeder::class]);

        //master data
        $this->call([Jenisseeder::class]);
        $this->call([SatuanSeeder::class]);
        $this->call([MerkSeeder::class]);
        $this->call([BarangSeeder::class]);

        //pelanggan
        $this->call([PembeliSeeder::class]);
        $this->call([PenjualSeeder::class]);
    }
}
