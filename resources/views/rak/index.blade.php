<!-- resources/views/rak/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Rak</title>
</head>
<body>
    <h1>Daftar Rak</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('rak.create') }}">Tambah Rak</a>

    <table border="1">
        <thead>
            <tr>
                <th>Kode Rak</th>
                <th>Lokasi Rak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rak as $r)
                <tr>
                    <td>{{ $r->kd_rak }}</td>
                    <td>{{ $r->lokasi_rak }}</td>
                    <td>
                        <a href="{{ route('rak.edit', $r->kd_rak) }}">Edit</a>
                        <form action="{{ route('rak.destroy', $r->kd_rak) }}" method="POST" style="display:inline;">
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
