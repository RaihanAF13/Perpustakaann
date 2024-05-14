<!-- resources/views/rak/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detail Rak</title>
</head>
<body>
    <h1>Detail Rak</h1>

    <table border="1">
        <tr>
            <th>Kode Rak</th>
            <td>{{ $rak->kd_rak }}</td>
        </tr>
        <tr>
            <th>Lokasi Rak</th>
            <td>{{ $rak->lokasi_rak }}</td>
        </tr>
    </table>

    <a href="{{ route('rak.index') }}">Kembali ke Daftar Rak</a>
</body>
</html>
