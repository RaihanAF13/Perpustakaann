<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-2xl font-bold">Perpustakaan</a>
            <div>
                <a href="{{ route('anggota.index') }}" class="text-white mr-4">Daftar Anggota</a>
                <a href="{{ route('penulis.index') }}" class="text-white mr-4">Daftar Penulis</a>
                <a href="{{ route('buku.index') }}" class="text-white mr-4">Daftar Buku</a>
                <a href="{{ route('rak.index') }}" class="text-white mr-4">Daftar Rak</a>
                <a href="{{ route('peminjaman.index') }}" class="text-white mr-4">Daftar Peminjaman</a>
                <a href="{{ route('sanksi.index') }}" class="text-white mr-4">Daftar Sanksi</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-10 p-5">
        <h1 class="text-3xl font-bold mb-5">Tambah Peminjaman</h1>
        <form action="{{ route('peminjaman.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="no_buku" class="block text-sm font-medium text-gray-700">No Buku</label>
                <input type="text" name="no_buku" id="no_buku" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>

            <div class="mb-4">
                <label for="id_anggota" class="block text-sm font-medium text-gray-700">ID Anggota</label>
                <input type="text" name="id_anggota" id="id_anggota" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>

            <div class="mb-4">
                <label for="tgl_peminjaman" class="block text-sm font-medium text-gray-700">Tanggal Peminjaman</label>
                <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>

            <div class="mb-4">
                <label for="tgl_pengembalian" class="block text-sm font-medium text-gray-700">Tanggal Pengembalian</label>
                <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    <option value="Dipinjam">Dipinjam</option>
                    <option value="Dikembalikan">Dikembalikan</option>
                </select>
            </div>

            @if ($errors->any())
                <div class="mb-4">
                    <ul class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
</body>
</html>
