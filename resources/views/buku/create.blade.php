<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Buku</title>
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
        <h1 class="text-3xl font-bold mb-5">Create Buku</h1>

        <form action="{{ route('buku.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-bold mb-2">Judul:</label>
                <input type="text" name="judul" id="judul" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('judul') border-red-500 @enderror" value="{{ old('judul') }}" required>
                @error('judul')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="edisi" class="block text-gray-700 font-bold mb-2">Edisi:</label>
                <input type="text" name="edisi" id="edisi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('edisi') border-red-500 @enderror" value="{{ old('edisi') }}" required>
                @error('edisi')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="no_rak" class="block text-gray-700 font-bold mb-2">No. Rak:</label>
                <input type="number" name="no_rak" id="no_rak" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('no_rak') border-red-500 @enderror" value="{{ old('no_rak') }}" required>
                @error('no_rak')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="tahun" class="block text-gray-700 font-bold mb-2">Tahun:</label>
                <input type="date" name="tahun" id="tahun" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('tahun') border-red-500 @enderror" value="{{ old('tahun') }}" required>
                @error('tahun')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="penerbit" class="block text-gray-700 font-bold mb-2">Penerbit:</label>
                <input type="text" name="penerbit" id="penerbit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('penerbit') border-red-500 @enderror" value="{{ old('penerbit') }}" required>
                @error('penerbit')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="kd_penulis" class="block text-gray-700 font-bold mb-2">Kode Penulis:</label>
                <input type="number" name="kd_penulis" id="kd_penulis" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('kd_penulis') border-red-500 @enderror" value="{{ old('kd_penulis') }}" required>
                @error('kd_penulis')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
