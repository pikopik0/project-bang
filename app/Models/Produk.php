<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $fillable = [
        'NamaProduk',
        'HargaProduk',
        'Stok',
    ];
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'pelanggan_id');
    }

    public function detailpenjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'pelanggan_id', 'produk_id');
    }
}
