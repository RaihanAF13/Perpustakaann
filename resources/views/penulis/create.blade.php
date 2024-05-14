<!-- resources/views/penulis/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penulis</title>
</head>
<body>
    <h1>Tambah Penulis</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('penulis.store') }}" method="POST">
        @csrf
        <label for="kd_penulis">Kode Penulis:</label>
        <input type="number" id="kd_penulis" name="kd_penulis" required><br>

        <label for="nama_penulis">Nama Penulis:</label>
        <input type="text" id="nama_penulis" name="nama_penulis" required><br>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
