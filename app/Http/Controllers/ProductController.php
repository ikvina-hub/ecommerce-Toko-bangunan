<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;

    $products = Product::when($search, function ($query) use ($search) {
        $query->where('nama_barang', 'like', "%$search%")
              ->orWhere('kode_barang', 'like', "%$search%");
    })->get();

    return view('katalog', compact('products'));
}

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'stok_tersedia' => 'required|numeric',
            'harga_satuan' => 'required|numeric',
            'satuan' => 'required'
        ]);

        Product::create($request->all());

        return redirect('/katalog')->with('success', 'Produk berhasil ditambah');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'kategori' => 'required',
        'stok_tersedia' => 'required|numeric',
        'harga_satuan' => 'required|numeric',
        'satuan' => 'required'
    ]);

    Product::findOrFail($id)->update($request->all());

    return redirect('/katalog')->with('success', 'Produk berhasil diupdate');
}
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect('/katalog')->with('success', 'Produk berhasil dihapus');
    }
}