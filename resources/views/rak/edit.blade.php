<!-- resources/views/rak/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Rak</title>
</head>
<body>
    <h1>Edit Rak</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rak.update', $rak->kd_rak) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="lokasi_rak">Lokasi Rak:</label>
        <input type="text" id="lokasi_rak" name="lokasi_rak" value="{{ $rak->lokasi_rak }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
