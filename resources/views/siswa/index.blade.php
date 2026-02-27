<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('siswa.create') }}">Tambah Data Siswa</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
        @foreach($siswa as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->umur }}</td>
            <td>{{ $s->nilai }}</td>
            <td>
                <a href="{{ route('siswa.edit', $s->id) }}">Edit</a>
                <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
