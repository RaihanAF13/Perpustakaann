<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penulis</title>
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
        <h1 class="text-3xl font-bold mb-6">Daftar Penulis</h1>
        <a href="{{ route('penulis.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Tambah Penulis</a>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-md shadow-md">
                <thead>
                    <tr class="bg-gray-200 border-b">
                        <th class="py-2 px-4 text-left">Kode Penulis</th>
                        <th class="py-2 px-4 text-left">Nama Penulis</th>
                        <th class="py-2 px-4 text-left">Tempat Lahir</th>
                        <th class="py-2 px-4 text-left">Tanggal Lahir</th>
                        <th class="py-2 px-4 text-left">Email</th>
                        <th class="py-2 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penulis as $p)
                        <tr class="border-b">
                            <td class="py-2 px-4">{{ $p->kd_penulis }}</td>
                            <td class="py-2 px-4">{{ $p->nama_penulis }}</td>
                            <td class="py-2 px-4">{{ $p->tempat_lahir }}</td>
                            <td class="py-2 px-4">{{ \Carbon\Carbon::parse($p->tgl_lahir)->format('d-m-Y') }}</td>
                            <td class="py-2 px-4">{{ $p->email }}</td>
                            <td class="py-2 px-4">
                                <a href="{{ route('penulis.show', $p->kd_penulis) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded inline-block">Detail</a>
                                <a href="{{ route('penulis.edit', $p->kd_penulis) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded inline-block mx-2">Edit</a>
                                <form action="{{ route('penulis.destroy', $p->kd_penulis) }}" method="POST" class="inline-block">
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
