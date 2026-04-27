<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori',
        'stok_tersedia',
        'harga_satuan',
        'satuan'
    ];
}