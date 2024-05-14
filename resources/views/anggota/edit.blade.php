<!-- resources/views/anggota/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Anggota</title>
</head>
<body>
    <h1>Edit Anggota</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $anggota->nama }}" required><br>

        <label for="no_hp">No HP:</label>
        <input type="text" id="no_hp" name="no_hp" value="{{ $anggota->no_hp }}" required><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required>{{ $anggota->alamat }}</textarea><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $anggota->email }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
