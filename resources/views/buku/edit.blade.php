<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-2xl font-bold">Perpustakaan </a>
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
        <h1 class="text-3xl font-bold mb-5">Edit Buku</h1>
        <form action="{{ route('buku.update', $buku->no_buku) }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" id="judul" name="judul" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('judul', $buku->judul) }}" required>
            </div>
            <div class="mb-4">
                <label for="edisi" class="block text-sm font-medium text-gray-700">Edisi</label>
                <input type="text" id="edisi" name="edisi" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('edisi', $buku->edisi) }}" required>
            </div>
            <div class="mb-4">
                <label for="no_rak" class="block text-sm font-medium text-gray-700">Nomor Rak</label>
                <select id="no_rak" name="no_rak" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    @foreach($raks as $rak)
                        <option value="{{ $rak->kd_rak }}" {{ $rak->kd_rak == $buku->no_rak ? 'selected' : '' }}>
                            {{ $rak->lokasi }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun</label>
                <input type="date" id="tahun" name="tahun" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('tahun', $buku->tahun) }}" required>
            </div>
            <div class="mb-4">
                <label for="penerbit" class="block text-sm font-medium text-gray-700">Penerbit</label>
                <input type="text" id="penerbit" name="penerbit" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('penerbit', $buku->penerbit) }}" required>
            </div>
            <div class="mb-4">
                <label for="kd_penulis" class="block text-sm font-medium text-gray-700">Kode Penulis</label>
                <select id="kd_penulis" name="kd_penulis" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    @foreach($penulis as $penulisItem)
                        <option value="{{ $penulisItem->kd_penulis }}" {{ $penulisItem->kd_penulis == $buku->kd_penulis ? 'selected' : '' }}>
                            {{ $penulisItem->nama_penulis }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                <a href="{{ route('buku.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
