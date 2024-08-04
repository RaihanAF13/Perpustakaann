<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sanksi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Detail Sanksi</h1>
        <dl class="row">
            <dt class="col-sm-3">ID Sanksi</dt>
            <dd class="col-sm-9">{{ $sanksi->id_sanksi }}</dd>

            <dt class="col-sm-3">ID Anggota</dt>
            <dd class="col-sm-9">{{ $sanksi->anggota->id_anggota }}</dd>

            <dt class="col-sm-3">ID Peminjaman</dt>
            <dd class="col-sm-9">{{ $sanksi->peminjaman->id_peminjaman }}</dd>

            <dt class="col-sm-3">Jumlah Denda</dt>
            <dd class="col-sm-9">{{ $sanksi->jumlah_denda }}</dd>

            <dt class="col-sm-3">Status</dt>
            <dd class="col-sm-9">{{ $sanksi->status }}</dd>
        </dl>
        <a href="{{ route('sanksi.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
