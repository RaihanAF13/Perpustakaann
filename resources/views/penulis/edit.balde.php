<!-- resources/views/penulis/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Penulis</title>
</head>
<body>
    <h1>Edit Penulis</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('penulis.update', $penulis->kd_penulis) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_penulis">Nama Penulis:</label>
        <input type="text" id="nama_penulis" name="nama_penulis" value="{{ $penulis->nama_penulis }}" required><br>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $penulis->tempat_lahir }}" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $penulis->tanggal_lahir }}" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $penulis->email }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
