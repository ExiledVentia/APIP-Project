<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Siswa</title>
</head>

<body>
    <center>
        <h1>HALAMAN SISWA</h1>
        <a href="tambah"><button>Tambah</button></a>
        <table border="1">
            <tbody>
                <tr>
                    <th>NO</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($kelas as $k)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->jk }}</td>
                        <td>{{ $s->kelas }}</td>
                        <td>{{ $s->jurusan }}</td>
                        <td>{{ $s->angkatan }}</td>
                        <td>
                            <button><a href="{{ route('ubah', $k->id) }}">Ubah</a></button>
                            <form action="{{ route('delete', $k->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</body>

</html>
