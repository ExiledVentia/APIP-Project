<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Kelas</title>
</head>

<body>
    <center>
        <h1>HALAMAN KELAS</h1>
        <a href="{{route ('kelas.create')}}"><button>Tambah</button></a>
        <table border="1">
            <tbody>
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Ruangan</th>
                    <th>Lantai</th>
                    <th>Aksi</th>

                </tr>
                @foreach ($kelas as $k)
                    <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->kelas }}</td>
                        <td>{{ $k->ruangan }}</td>
                        <td>{{ $k->lantai }}</td>
                        <td>
                            <button><a href="{{ route('kelas.edit', $k->id) }}">Ubah</a></button>
                            <form action="{{ route('kelas.destroy', $k->id) }}" method="POST">
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
