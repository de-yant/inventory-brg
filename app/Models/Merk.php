<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;
    protected $table = "merks";
    protected $primaryKey = 'id';
    protected $fillable = [
        'merkbarang_nama',
        'merkbarang_ket'
    ];
    protected $hidden;

    public function barang()
    {
        return $this->hasMany(Barang::class, 'merk_id', 'id');
    }
}
