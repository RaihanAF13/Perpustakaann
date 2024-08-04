<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Detail Buku</h1>
        <dl class="row">
            <dt class="col-sm-3">Nomor Buku</dt>
            <dd class="col-sm-9">{{ $buku->no_buku }}</dd>

            <dt class="col-sm-3">Judul</dt>
            <dd class="col-sm-9">{{ $buku->judul }}</dd>

            <dt class="col-sm-3">Edisi</dt>
            <dd class="col-sm-9">{{ $buku->edisi }}</dd>

            <dt class="col-sm-3">Nomor Rak</dt>
            <dd class="col-sm-9">{{ $buku->no_rak }}</dd>

            <dt class="col-sm-3">Tahun</dt>
            <dd class="col-sm-9">{{ \Carbon\Carbon::parse($buku->tahun)->format('Y') }}</dd>

            <dt class="col-sm-3">Penerbit</dt>
            <dd class="col-sm-9">{{ $buku->penerbit }}</dd>

            <dt class="col-sm-3">Kode Penulis</dt>
            <dd class="col-sm-9">{{ $buku->kd_penulis }}</dd>
        </dl>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>

</html>
