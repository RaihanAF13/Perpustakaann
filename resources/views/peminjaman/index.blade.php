<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>
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
        <h1 class="text-3xl font-bold mb-4">Daftar Peminjaman</h1>
        <a href="{{ route('peminjaman.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Tambah Peminjaman</a>
        
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-md shadow-md">
                <thead class="bg-gray-200 border-b border-gray-300">
                    <tr>
                        <th class="px-6 py-3 text-left text-gray-600 font-medium text-sm uppercase tracking-wider">ID Peminjaman</th>
                        <th class="px-6 py-3 text-left text-gray-600 font-medium text-sm uppercase tracking-wider">No Buku</th>
                        <th class="px-6 py-3 text-left text-gray-600 font-medium text-sm uppercase tracking-wider">ID Anggota</th>
                        <th class="px-6 py-3 text-left text-gray-600 font-medium text-sm uppercase tracking-wider">Tanggal Peminjaman</th>
                        <th class="px-6 py-3 text-left text-gray-600 font-medium text-sm uppercase tracking-wider">Tanggal Pengembalian</th>
                        <th class="px-6 py-3 text-left text-gray-600 font-medium text-sm uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-gray-600 font-medium text-sm uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjamans as $peminjaman)
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $peminjaman->id_peminjaman }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $peminjaman->no_buku }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $peminjaman->id_anggota }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $peminjaman->tgl_peminjaman }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $peminjaman->tgl_pengembalian }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $peminjaman->status }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">
                                <a href="{{ route('peminjaman.edit', $peminjaman->id_peminjaman) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                                <form action="{{ route('peminjaman.destroy', $peminjaman->id_peminjaman) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
