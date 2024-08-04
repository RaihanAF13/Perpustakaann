<!-- resources/views/penulis/show.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penulis</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Detail Penulis</h1>
        <dl class="row">
            <dt class="col-sm-3">Kode Penulis</dt>
            <dd class="col-sm-9">{{ $penulis->kd_penulis }}</dd>

            <dt class="col-sm-3">Nama Penulis</dt>
            <dd class="col-sm-9">{{ $penulis->nama_penulis }}</dd>

            <dt class="col-sm-3">Tempat Lahir</dt>
            <dd class="col-sm-9">{{ $penulis->tempat_lahir }}</dd>

            <dt class="col-sm-3">Tanggal Lahir</dt>
            <dd class="col-sm-9">{{ \Carbon\Carbon::parse($penulis->tgl_lahir)->format('d-m-Y') }}</dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $penulis->email }}</dd>
        </dl>
        <a href="{{ route('penulis.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>

</html>
