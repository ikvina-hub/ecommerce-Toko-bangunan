<!DOCTYPE html>
<html>
<head>
<title>Tambah Produk</title>
@vite(['resources/css/app.css'])
</head>
<body class="p-10 bg-gray-100">

<h1 class="text-2xl font-bold mb-5">Tambah Produk</h1>

<form action="/products" method="POST" class="bg-white p-6 rounded shadow">
@csrf

<input type="text" name="kode_barang" placeholder="Kode Barang" class="border p-2 w-full mb-3">
<input type="text" name="nama_barang" placeholder="Nama Barang" class="border p-2 w-full mb-3">
<input type="text" name="kategori" placeholder="Kategori" class="border p-2 w-full mb-3">
<input type="number" name="stok_tersedia" placeholder="Stok" class="border p-2 w-full mb-3">
<input type="number" name="harga_satuan" placeholder="Harga" class="border p-2 w-full mb-3">
<input type="text" name="satuan" placeholder="Satuan" class="border p-2 w-full mb-3">

<button class="bg-blue-600 text-white px-5 py-2 rounded">Simpan</button>

</form>

</body>
</html>