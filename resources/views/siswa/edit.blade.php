<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>
    <h1>Edit Data Siswa</h1>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" value="{{ $siswa->umur }}"><br><br>

        <label>Nilai:</label><br>
        <input type="number" step="0.01" name="nilai" value="{{ $siswa->nilai }}"><br><br>

        <button type="submit">Update</button>
        <a href="{{ route('siswa.index') }}">Kembali</a>
    </form>
</body>
</html>
