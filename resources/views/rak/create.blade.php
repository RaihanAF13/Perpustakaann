<!-- resources/views/rak/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Rak</title>
</head>
<body>
    <h1>Tambah Rak</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rak.store') }}" method="POST">
        @csrf
        <label for="lokasi_rak">Lokasi Rak:</label>
<input type="text" id="lokasi_rak" name="lokasi_rak" value="{{ old('lokasi_rak') }}" required>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
