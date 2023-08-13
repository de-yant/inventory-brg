<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barangs";
    protected $primaryKey = 'id';
    protected $fillable = [
        'barang_gambar',
        'jenis_id',
        'satuan_id',
        'merk_id',
        'barang_kode',
        'barang_nama',
        'barang_harga',
        'barang_stok',
        'barang_ket',

    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id', 'id');
    }

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id', 'id');
    }

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'merk_id', 'id');
    }

    public function barangmasuk()
    {
        return $this->belongsTo(BarangMasuk::class, 'barang_id', 'id');
    }
}
