<!DOCTYPE html>
<html>
<head>
<title>Edit Produk</title>
@vite(['resources/css/app.css'])
</head>
<body class="p-10 bg-gray-100">

<h1 class="text-2xl font-bold mb-5">Edit Produk</h1>

<form action="/products/{{ $product->id }}" method="POST" class="bg-white p-6 rounded shadow">
@csrf
@method('PUT')

<input type="text" name="kode_barang" value="{{ $product->kode_barang }}" class="border p-2 w-full mb-3">
<input type="text" name="nama_barang" value="{{ $product->nama_barang }}" class="border p-2 w-full mb-3">
<input type="text" name="kategori" value="{{ $product->kategori }}" class="border p-2 w-full mb-3">
<input type="number" name="stok_tersedia" value="{{ $product->stok_tersedia }}" class="border p-2 w-full mb-3">
<input type="number" name="harga_satuan" value="{{ $product->harga_satuan }}" class="border p-2 w-full mb-3">
<input type="text" name="satuan" value="{{ $product->satuan }}" class="border p-2 w-full mb-3">

<button class="bg-green-600 text-white px-5 py-2 rounded">Update</button>

</form>

</body>
</html>