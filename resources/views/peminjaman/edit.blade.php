<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peminjaman</title>
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

    <div class="container mx-auto mt-10 p-6">
        <h1 class="text-3xl font-bold mb-6">Edit Peminjaman</h1>
        <form action="{{ route('peminjaman.update', ['id' => $peminjaman->id_peminjaman]) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="no_buku" class="block text-gray-700 font-semibold mb-2">No Buku</label>
                <input type="text" name="no_buku" id="no_buku" class="form-input w-full border border-gray-300 rounded-md shadow-sm @error('no_buku') border-red-500 @enderror"
                    value="{{ old('no_buku', $peminjaman->no_buku) }}" required>
                @error('no_buku')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="id_anggota" class="block text-gray-700 font-semibold mb-2">ID Anggota</label>
                <input type="text" name="id_anggota" id="id_anggota" class="form-input w-full border border-gray-300 rounded-md shadow-sm @error('id_anggota') border-red-500 @enderror"
                    value="{{ old('id_anggota', $peminjaman->id_anggota) }}" required>
                @error('id_anggota')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tgl_peminjaman" class="block text-gray-700 font-semibold mb-2">Tanggal Peminjaman</label>
                <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-input w-full border border-gray-300 rounded-md shadow-sm @error('tgl_peminjaman') border-red-500 @enderror"
                    value="{{ old('tgl_peminjaman', $peminjaman->tgl_peminjaman) }}" required>
                @error('tgl_peminjaman')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tgl_pengembalian" class="block text-gray-700 font-semibold mb-2">Tanggal Pengembalian</label>
                <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" class="form-input w-full border border-gray-300 rounded-md shadow-sm @error('tgl_pengembalian') border-red-500 @enderror"
                    value="{{ old('tgl_pengembalian', $peminjaman->tgl_pengembalian) }}" required>
                @error('tgl_pengembalian')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="status" class="block text-gray-700 font-semibold mb-2">Status</label>
                <select name="status" id="status" class="form-select w-full border border-gray-300 rounded-md shadow-sm @error('status') border-red-500 @enderror" required>
                    <option value="Dipinjam" {{ old('status', $peminjaman->status) == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                    <option value="Dikembalikan" {{ old('status', $peminjaman->status) == 'Dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
        </form>
    </div>
</body>
</html>
