<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Anggota</title>
</head>
<body>
    <h1>Create Anggota</h1>
    <form method="POST" action="{{ route('anggota.store') }}">
        @csrf
        <div>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="no_hp">Nomor HP:</label><br>
            <input type="text" id="no_hp" name="no_hp" maxlength="16" required>
        </div>
        <div>
            <label for="alamat">Alamat:</label><br>
            <textarea id="alamat" name="alamat" required></textarea>
        </div>
        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" maxlength="200" required>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>
