<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualans';
    protected $fillable = [
        'pelanggan_id',
        'TanggalPenjualan',
        'TotalPenjualan',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            $event->TanggalPenjualan = now(); // Mengisi tanggal saat record dibuat
        });
    }

    public function detailPenjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'penjualan_id');
    }
    // public function viewdetailPenjualan()
    // {
    //     return $this->belongsTo(DetailPenjualan::class);
    // }
    public function produk()
    {
        return $this->belongsTo(Produk::class,'produk_id');
    }


}
