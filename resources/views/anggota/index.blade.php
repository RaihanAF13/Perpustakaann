<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
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
        <h1 class="text-3xl font-bold mb-5">Daftar Anggota</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <a href="{{ route('anggota.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5 inline-block">Tambah Anggota</a>

        <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Nama</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">No HP</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Alamat</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Email</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($anggota as $member)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $member->nama }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $member->no_hp }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $member->alamat }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $member->email }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <a href="{{ route('anggota.edit', $member->id_anggota) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                <form action="{{ route('anggota.destroy', $member->id_anggota) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
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
