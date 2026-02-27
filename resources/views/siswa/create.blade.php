<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur"><br><br>

        <label>Nilai:</label><br>
        <input type="number" step="0.01" name="nilai"><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('siswa.index') }}">Kembali</a>
    </form>
</body>
</html>
