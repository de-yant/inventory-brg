<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;
    protected $table = "penjuals";
    protected $primaryKey = 'id';
    protected $fillable = [
        'penjual_nama',
        'penjual_alamat',
        'penjual_telp',
    ];
    protected $hidden;

    public function barangmasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'penjual_id', 'id');
    }
}
