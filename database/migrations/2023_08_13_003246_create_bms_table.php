<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bms', function (Blueprint $table) {
            $table->id();
            $table->string('bm_kode')->unique();
            $table->string('barang_kode');
            $table->string('penjual_id');
            $table->date('bm_tanggal');
            $table->integer('bm_jumlah')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bms');
    }
};
