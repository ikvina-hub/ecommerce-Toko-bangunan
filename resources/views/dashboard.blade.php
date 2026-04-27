<x-app-layout>

<div class="min-h-screen bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white min-h-screen p-6">
        <h2 class="text-2xl font-bold mb-8">Admin Panel</h2>

        <nav class="space-y-3">

            <a href="/dashboard"
               class="block px-4 py-2 rounded bg-blue-600">
               Dashboard
            </a>

            <a href="/katalog"
               class="block px-4 py-2 rounded hover:bg-gray-700">
               Katalog Produk
            </a>

            <a href="/products/create"
               class="block px-4 py-2 rounded hover:bg-gray-700">
               Tambah Produk
            </a>

            <form method="POST" action="/logout">
                @csrf
                <button class="w-full text-left px-4 py-2 rounded hover:bg-red-600">
                    Logout
                </button>
            </form>

        </nav>
    </aside>


    <!-- Content -->
    <main class="flex-1 p-8">

        <h1 class="text-3xl font-bold text-gray-800 mb-8">
            Dashboard Admin
        </h1>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-blue-500 text-white p-6 rounded-xl shadow-lg">
                <h2 class="text-lg">Total Produk</h2>
                <p class="text-4xl font-bold mt-3">{{ $totalProduk }}</p>
            </div>

            <div class="bg-red-500 text-white p-6 rounded-xl shadow-lg">
                <h2 class="text-lg">Stok Menipis</h2>
                <p class="text-4xl font-bold mt-3">{{ $stokMenipis }}</p>
            </div>

            <div class="bg-green-500 text-white p-6 rounded-xl shadow-lg">
                <h2 class="text-lg">Total Stok</h2>
                <p class="text-4xl font-bold mt-3">{{ $totalStok }}</p>
            </div>

        </div>

        <!-- Quick Buttons -->
        <div class="mt-8 flex gap-4">

            <a href="/katalog"
               class="bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-black">
               Lihat Katalog
            </a>

            <a href="/products/create"
               class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
               Tambah Produk
            </a>

        </div>

        <!-- Welcome -->
        <div class="mt-10 bg-white p-6 rounded-xl shadow">
            <h2 class="text-xl font-bold mb-3">Selamat Datang 👋</h2>
            <p class="text-gray-600">
                Sistem Inventory Material Bangunan berbasis Laravel + API.
            </p>
        </div>

    </main>

</div>

</x-app-layout>