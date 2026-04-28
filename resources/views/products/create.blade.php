<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Produk</title>
@vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 min-h-screen flex justify-center items-center p-6">

<div class="w-full max-w-xl bg-white rounded-xl shadow-lg p-8">

<h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
Tambah Produk Baru
</h1>

<form action="/products" method="POST">
@csrf

<input type="text" name="kode_barang" placeholder="Kode Barang"
class="border p-3 w-full mb-4 rounded">

<input type="text" name="nama_barang" placeholder="Nama Barang"
class="border p-3 w-full mb-4 rounded">

<input type="text" name="kategori" placeholder="Kategori"
class="border p-3 w-full mb-4 rounded">

<input type="number" name="stok_tersedia" placeholder="Stok"
class="border p-3 w-full mb-4 rounded">

<input type="number" name="harga_satuan" placeholder="Harga Satuan"
class="border p-3 w-full mb-4 rounded">

<input type="text" name="satuan" placeholder="Satuan"
class="border p-3 w-full mb-6 rounded">

<div class="flex gap-3">

<a href="/katalog"
class="flex-1 bg-gray-500 text-white text-center py-3 rounded hover:bg-gray-600">
Kembali
</a>

<button type="submit"
class="flex-1 bg-blue-600 text-white py-3 rounded hover:bg-blue-700">
Simpan Produk
</button>

</div>

</form>

</div>

</body>
</html>