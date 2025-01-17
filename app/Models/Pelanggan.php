<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';
    protected $fillable = [
        'NamaPelanggan',
        'Alamat',
        'NoTelepon',
    ];
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'pelanggan_id');
    }

    public function detailpenjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'pelanggan_id');
    }



    
}
