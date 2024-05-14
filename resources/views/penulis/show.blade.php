<!-- resources/views/penulis/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detail Penulis</title>
</head>
<body>
    <h1>Detail Penulis</h1>

    <table border="1">
        <tr>
            <th>Kode Penulis</th>
            <td>{{ $penulis->kd_penulis }}</td>
        </tr>
        <tr>
            <th>Nama Penulis</th>
            <td>{{ $penulis->nama_penulis }}</td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td>{{ $penulis->tempat_lahir }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $penulis->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $penulis->email }}</td>
        </tr>
    </table>

    <a href="{{ route('penulis.index') }}">Kembali ke Daftar Penulis</a>
</body>
</html>
