<!-- resources/views/sanksi/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Sanksi</title>
</head>
<body>
    <h1>Edit Sanksi</h1>

    <form method="POST" action="{{ route('sanksi.update', $sanksi->id_sanksi) }}">
        @csrf
        @method('PUT')
        <label for="id_anggota">ID Anggota:</label>
        <input type="text" id="id_anggota" name="id_anggota" value="{{ $sanksi->id_anggota }}" required>
        <br>
        <label for="id_peminjaman">ID Peminjaman:</label>
        <input type="text" id="id_peminjaman" name="id_peminjaman" value="{{ $sanksi->id_peminjaman }}" required>
        <br>
        <label for="jumlah_denda">Jumlah Denda:</label>
        <input type="number" id="jumlah_denda" name="jumlah_denda" value="{{ $sanksi->jumlah_denda }}" required>
        <br>
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="tunggakan" {{ $sanksi->status == 'tunggakan' ? 'selected' : '' }}>Tunggakan</option>
            <option value="lunas" {{ $sanksi->status == 'lunas' ? 'selected' : '' }}>Lunas</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
