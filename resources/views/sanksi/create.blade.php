<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sanksi</title>
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

    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-md">
        <h1 class="text-3xl font-bold mb-6">Tambah Sanksi</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('sanksi.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="id_anggota" class="block text-gray-700 text-sm font-bold mb-2">ID Anggota</label>
                <select id="id_anggota" name="id_anggota" class="form-select mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                    @foreach($anggota as $anggotaItem)
                        <option value="{{ $anggotaItem->id_anggota }}">{{ $anggotaItem->id_anggota }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_peminjaman" class="block text-gray-700 text-sm font-bold mb-2">ID Peminjaman</label>
                <select id="id_peminjaman" name="id_peminjaman" class="form-select mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                    @foreach($peminjaman as $peminjamanItem)
                        <option value="{{ $peminjamanItem->id_peminjaman }}">{{ $peminjamanItem->id_peminjaman }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="jumlah_denda" class="block text-gray-700 text-sm font-bold mb-2">Jumlah Denda</label>
                <input type="number" id="jumlah_denda" name="jumlah_denda" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                <select id="status" name="status" class="form-select mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                    <option value="Tunggakan">Tunggakan</option>
                    <option value="Lunas">Lunas</option>
                </select>
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                <a href="{{ route('sanksi.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Kembali</a>
            </div>
        </form>
    </div>
</body>

</html>
