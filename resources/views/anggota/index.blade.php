<!-- resources/views/anggota/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
</head>
<body>
    <h1>Daftar Anggota</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('anggota.create') }}">Tambah Anggota</a>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggota as $member)
                <tr>
                    <td>{{ $member->nama }}</td>
                    <td>{{ $member->no_hp }}</td>
                    <td>{{ $member->alamat }}</td>
                    <td>{{ $member->email }}</td>
                    <td>
                        <a href="{{ route('anggota.edit', $member->id_anggota) }}">Edit</a>
                        <form action="{{ route('anggota.destroy', $member->id_anggota) }}" method="POST" style="display:inline;">
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
