<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->delete();

        Product::insert([
            [
                'kode_barang' => 'BRG-001',
                'nama_barang' => 'Semen Tiga Roda 50kg',
                'kategori' => 'Material Dasar',
                'stok_tersedia' => 150,
                'harga_satuan' => 65000,
                'satuan' => 'Sak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'BRG-002',
                'nama_barang' => 'Cat Dulux Pentalite Putih',
                'kategori' => 'Cat & Pelapis',
                'stok_tersedia' => 45,
                'harga_satuan' => 185000,
                'satuan' => 'Kaleng',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'BRG-003',
                'nama_barang' => 'Pipa PVC Wavin 1/2 Inch',
                'kategori' => 'Plumbing',
                'stok_tersedia' => 300,
                'harga_satuan' => 25000,
                'satuan' => 'Batang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'BRG-004',
                'nama_barang' => 'Keramik Lantai Premium',
                'kategori' => 'Interior',
                'stok_tersedia' => 80,
                'harga_satuan' => 75000,
                'satuan' => 'Box',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'BRG-005',
                'nama_barang' => 'Besi Hollow 4x4',
                'kategori' => 'Baja Ringan',
                'stok_tersedia' => 120,
                'harga_satuan' => 95000,
                'satuan' => 'Batang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'BRG-006',
                'nama_barang' => 'Batu Bata Merah',
                'kategori' => 'Material Dasar',
                'stok_tersedia' => 1000,
                'harga_satuan' => 800,
                'satuan' => 'Unit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}