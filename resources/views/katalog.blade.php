<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Katalog Toko Bangunan</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

@if(session('success'))
<div class="bg-green-500 text-white p-3 text-center">
{{ session('success') }}
</div>
@endif

<div class="container mx-auto px-4 py-8">

<header class="text-center mb-8">
<h1 class="text-3xl font-bold">Katalog Material Bangunan</h1>
<p class="text-gray-500">Pusat kebutuhan konstruksi dan renovasi Anda</p>
</header>

<div class="flex justify-between mb-6 gap-3">

<a href="/products/create"
class="bg-blue-600 text-white px-4 py-2 rounded">
+ Tambah Produk
</a>

<form method="GET" action="/katalog" class="flex gap-2">
<input type="text" name="search"
placeholder="Cari produk..."
value="{{ request('search') }}"
class="border p-2 rounded">

<button class="bg-gray-800 text-white px-4 rounded">
Cari
</button>
</form>

</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

@foreach ($products as $item)

<div class="bg-white rounded-lg shadow p-5">

<span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">
{{ $item->kategori }}
</span>

<h3 class="text-xl font-bold mt-3">
{{ $item->nama_barang }}
</h3>

<p class="text-sm text-gray-600 mt-2">
Kode: {{ $item->kode_barang }}
</p>

<p class="text-sm">
Stok:
<span class="{{ $item->stok_tersedia < 50 ? 'text-red-500' : 'text-green-600' }}">
{{ $item->stok_tersedia }} {{ $item->satuan }}
</span>
</p>

<p class="text-orange-600 text-2xl font-bold mt-3">
Rp {{ number_format($item->harga_satuan,0,',','.') }}
</p>

<div class="flex gap-2 mt-4">

<a href="/products/{{ $item->id }}/edit"
class="flex-1 bg-yellow-500 text-white text-center py-2 rounded">
Edit
</a>

<form action="/products/{{ $item->id }}" method="POST" class="flex-1">
@csrf
@method('DELETE')

<button onclick="return confirm('Yakin hapus produk ini?')"
class="w-full bg-red-600 text-white py-2 rounded">
Hapus
</button>

</form>

</div>

</div>

@endforeach

</div>

</div>

</body>
</html>