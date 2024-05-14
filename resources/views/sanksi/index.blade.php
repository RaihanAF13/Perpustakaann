<!-- resources/views/sanksi/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Sanksi</title>
</head>
<body>
    <h1>Daftar Sanksi</h1>

    <a href="{{ route('sanksi.create') }}">Tambah Sanksi</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID Sanksi</th>
                <th>ID Anggota</th>
                <th>ID Peminjaman</th>
                <th>Jumlah Denda</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sanksi as $s)
                <tr>
                    <td>{{ $s->id_sanksi }}</td>
                    <td>{{ $s->id_anggota }}</td>
                    <td>{{ $s->id_peminjaman }}</td>
                    <td>{{ $s->jumlah_denda }}</td>
                    <td>{{ $s->status }}</td>
                    <td>
                        <a href="{{ route('sanksi.edit', $s->id_sanksi) }}">Edit</a>
                        <form action="{{ route('sanksi.destroy', $s->id_sanksi) }}" method="POST" style="display:inline;">
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
