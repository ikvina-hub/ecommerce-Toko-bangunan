<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {

    $totalProduk = Product::count();
    $stokMenipis = Product::where('stok_tersedia', '<', 50)->count();
    $totalStok   = Product::sum('stok_tersedia');

    return view('dashboard', compact(
        'totalProduk',
        'stokMenipis',
        'totalStok'
    ));

})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/katalog', [ProductController::class, 'index'])->name('katalog');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products', [ProductController::class, 'store']);

    Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
    Route::put('/products/{id}', [ProductController::class, 'update']);

    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});

require __DIR__.'/auth.php';