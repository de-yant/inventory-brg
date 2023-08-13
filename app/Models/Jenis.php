<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $table = "jenis";
    protected $primaryKey = 'id';
    protected $fillable = [
        'jenisbarang_nama',
        'jenisbarang_ket'
    ];
    protected $hidden;

    public function barang()
    {
        return $this->hasMany(Barang::class, 'jenis_id', 'id');
    }

    public function barangmasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'jenis_id', 'id');
    }

    public function barangkeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'jenis_id', 'id');
    }
}
