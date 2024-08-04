<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
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
        <h1 class="text-3xl font-bold mb-5">Daftar Buku</h1>
        <a href="{{ route('buku.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5 inline-block">Tambah Buku</a>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Nomor Buku</th>
                        <th class="py-2 px-4 border-b">Judul</th>
                        <th class="py-2 px-4 border-b">Edisi</th>
                        <th class="py-2 px-4 border-b">Nomor Rak</th>
                        <th class="py-2 px-4 border-b">Tahun</th>
                        <th class="py-2 px-4 border-b">Penerbit</th>
                        <th class="py-2 px-4 border-b">Kode Penulis</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bukus as $buku)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $buku->no_buku }}</td>
                            <td class="py-2 px-4 border-b">{{ $buku->judul }}</td>
                            <td class="py-2 px-4 border-b">{{ $buku->edisi }}</td>
                            <td class="py-2 px-4 border-b">{{ $buku->no_rak }}</td>
                            <td class="py-2 px-4 border-b">{{ $buku->tahun instanceof \Carbon\Carbon ? $buku->tahun->format('Y') : $buku->tahun }}</td>
                            <td class="py-2 px-4 border-b">{{ $buku->penerbit }}</td>
                            <td class="py-2 px-4 border-b">{{ $buku->kd_penulis }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('buku.show', $buku->no_buku) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Lihat</a>
                                <a href="{{ route('buku.edit', $buku->no_buku) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                <form action="{{ route('buku.destroy', $buku->no_buku) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" onclick="return confirm('Are you sure?')">Hapus</button>
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
