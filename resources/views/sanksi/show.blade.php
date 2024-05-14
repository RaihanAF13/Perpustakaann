<!-- resources/views/sanksi/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detail Sanksi</title>
</head>
<body>
    <h1>Detail Sanksi</h1>

    <p><strong>ID Sanksi:</strong> {{ $sanksi->id_sanksi }}</p>
    <p><strong>ID Anggota:</strong> {{ $sanksi->id_anggota }}</p>
    <p><strong>ID Peminjaman:</strong> {{ $sanksi->id_peminjaman }}</p>
    <p><strong>Jumlah Denda:</strong> {{ $sanksi->jumlah_denda }}</p>
    <p><strong>Status:</strong> {{ $sanksi->status }}</p>

    <a href="{{ route('sanksi.index') }}">Kembali ke Daftar Sanksi</a>
</body>
</html>
