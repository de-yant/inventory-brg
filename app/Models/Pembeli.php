<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = "pembelis";
    protected $primaryKey = 'id';
    protected $fillable = [
        'pembeli_nama',
        'pembeli_alamat',
        'pembeli_telp',
    ];
    protected $hidden;

    public function barangkeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'pembeli_id', 'id');
    }
}
