<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bk extends Model
{
    use HasFactory;
    protected $table = "bks";
    protected $primaryKey = 'id';
    protected $fillable = [
        'bk_tanggal',
        'bk_kode',
        'barang_kode',
        'pembeli_id',
        'bk_jumlah',
    ];
    protected $hidden;

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id', 'id');
    }

    public function jenis()
    {
        return $this->belongsTo(JenisBarang::class, 'jenis_id', 'id');
    }
}
