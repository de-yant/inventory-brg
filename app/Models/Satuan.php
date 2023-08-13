<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;
    protected $table = "satuans";
    protected $primaryKey = 'id';
    protected $fillable = [
        'satuanbarang_nama',
        'satuanbarang_ket'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'satuan_id', 'id');
    }
}
