<!-- resources/views/sanksi/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Sanksi</title>
</head>
<body>
    <h1>Create Sanksi</h1>

    <form method="POST" action="{{ route('sanksi.store') }}">
        @csrf
        <label for="id_anggota">ID Anggota:</label>
        <input type="text" id="id_anggota" name="id_anggota" required>
        <br>
        <label for="id_peminjaman">ID Peminjaman:</label>
        <input type="text" id="id_peminjaman" name="id_peminjaman" required>
        <br>
        <label for="jumlah_denda">Jumlah Denda:</label>
        <input type="number" id="jumlah_denda" name="jumlah_denda" required>
        <br>
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="tunggakan">Tunggakan</option>
            <option value="lunas">Lunas</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
