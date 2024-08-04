<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sanksi</title>
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
        <h1 class="text-3xl font-bold mb-6">Daftar Sanksi</h1>

        <a href="{{ route('sanksi.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-6 inline-block">Tambah Sanksi</a>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-md shadow-md">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 text-left">
                        <th class="py-2 px-4 border-b">ID Sanksi</th>
                        <th class="py-2 px-4 border-b">ID Anggota</th>
                        <th class="py-2 px-4 border-b">ID Peminjaman</th>
                        <th class="py-2 px-4 border-b">Jumlah Denda</th>
                        <th class="py-2 px-4 border-b">Status</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sanksi as $sanksi)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b">{{ $sanksi->id_sanksi }}</td>
                            <td class="py-2 px-4 border-b">{{ $sanksi->anggota->id_anggota }}</td>
                            <td class="py-2 px-4 border-b">{{ $sanksi->peminjaman->id_peminjaman }}</td>
                            <td class="py-2 px-4 border-b">{{ $sanksi->jumlah_denda }}</td>
                            <td class="py-2 px-4 border-b">{{ $sanksi->status }}</td>
                            <td class="py-2 px-4 border-b flex space-x-2">
                                <a href="{{ route('sanksi.show', $sanksi->id_sanksi) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Lihat</a>
                                <a href="{{ route('sanksi.edit', $sanksi->id_sanksi) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                <form action="{{ route('sanksi.destroy', $sanksi->id_sanksi) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Hapus</button>
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
