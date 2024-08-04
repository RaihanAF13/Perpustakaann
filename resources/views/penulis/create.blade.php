<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penulis</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-2xl font-bold">Perpustakaan</a>
            <div>
                <<a href="{{ route('anggota.index') }}" class="text-white mr-4">Daftar Anggota</a>
                <a href="{{ route('penulis.index') }}" class="text-white mr-4">Daftar Penulis</a>
                <a href="{{ route('buku.index') }}" class="text-white mr-4">Daftar Buku</a>
                <a href="{{ route('rak.index') }}" class="text-white mr-4">Daftar Rak</a>
                <a href="{{ route('peminjaman.index') }}" class="text-white mr-4">Daftar Peminjaman</a>
                <a href="{{ route('sanksi.index') }}" class="text-white mr-4">Daftar Sanksi</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-10 p-6">
        <h1 class="text-3xl font-bold mb-6">Tambah Penulis</h1>
        <form action="{{ route('penulis.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="nama_penulis" class="block text-gray-700 font-semibold mb-2">Nama Penulis</label>
                <input type="text" id="nama_penulis" name="nama_penulis" class="form-input w-full border border-gray-300 rounded-md shadow-sm @error('nama_penulis') border-red-500 @enderror" required>
                @error('nama_penulis')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tempat_lahir" class="block text-gray-700 font-semibold mb-2">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-input w-full border border-gray-300 rounded-md shadow-sm @error('tempat_lahir') border-red-500 @enderror" required>
                @error('tempat_lahir')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tgl_lahir" class="block text-gray-700 font-semibold mb-2">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-input w-full border border-gray-300 rounded-md shadow-sm @error('tgl_lahir') border-red-500 @enderror" required>
                @error('tgl_lahir')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="form-input w-full border border-gray-300 rounded-md shadow-sm @error('email') border-red-500 @enderror" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Whoops!</strong>
                        <ul class="list-disc pl-5 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
            <a href="{{ route('penulis.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-4">Kembali</a>
        </form>
    </div>
</body>
</html>
