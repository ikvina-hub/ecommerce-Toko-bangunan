<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Produk</title>
@vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 min-h-screen flex justify-center items-center p-6">

<div class="w-full max-w-xl bg-white rounded-xl shadow-lg p-8">

<h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
Edit Produk
</h1>

<form action="/products/{{ $product->id }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="kode_barang"
value="{{ $product->kode_barang }}"
class="border p-3 w-full mb-4 rounded">

<input type="text" name="nama_barang"
value="{{ $product->nama_barang }}"
class="border p-3 w-full mb-4 rounded">

<input type="text" name="kategori"
value="{{ $product->kategori }}"
class="border p-3 w-full mb-4 rounded">

<input type="number" name="stok_tersedia"
value="{{ $product->stok_tersedia }}"
class="border p-3 w-full mb-4 rounded">

<input type="number" name="harga_satuan"
value="{{ $product->harga_satuan }}"
class="border p-3 w-full mb-4 rounded">

<input type="text" name="satuan"
value="{{ $product->satuan }}"
class="border p-3 w-full mb-6 rounded">

<div class="flex gap-3">

<a href="/katalog"
class="flex-1 bg-gray-500 text-white text-center py-3 rounded hover:bg-gray-600">
Kembali
</a>

<button type="submit"
class="flex-1 bg-green-600 text-white py-3 rounded hover:bg-green-700">
Update Produk
</button>

</div>

</form>

</div>

</body>
</html>