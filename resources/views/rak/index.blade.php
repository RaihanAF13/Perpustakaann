<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Rak</title>
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
        <h1 class="text-3xl font-bold mb-6">Daftar Rak</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('rak.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-6 inline-block">Tambah Rak</a>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-md shadow-md">
                <thead>
                    <tr class="bg-gray-200 border-b">
                        <th class="px-6 py-3 text-left text-gray-700">Kode Rak</th>
                        <th class="px-6 py-3 text-left text-gray-700">Lokasi Rak</th>
                        <th class="px-6 py-3 text-left text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rak as $r)
                        <tr class="border-b">
                            <td class="px-6 py-4">{{ $r->kd_rak }}</td>
                            <td class="px-6 py-4">{{ $r->lokasi }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('rak.edit', $r->kd_rak) }}"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                                <form action="{{ route('rak.destroy', $r->kd_rak) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
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
