<!-- resources/views/penulis/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penulis</title>
</head>
<body>
    <h1>Daftar Penulis</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('penulis.create') }}">Tambah Penulis</a>

    <table border="1">
        <thead>
            <tr>
                <th>Kode Penulis</th>
                <th>Nama Penulis</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penulis as $writer)
                <tr>
                    <td>{{ $writer->kd_penulis }}</td>
                    <td>{{ $writer->nama_penulis }}</td>
                    <td>{{ $writer->tempat_lahir }}</td>
                    <td>{{ $writer->tanggal_lahir }}</td>
                    <td>{{ $writer->email }}</td>
                    <td>
                        <a href="{{ route('penulis.show', $writer->kd_penulis) }}">Detail</a>
                        <form action="{{ route('penulis.destroy', $writer->kd_penulis) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
