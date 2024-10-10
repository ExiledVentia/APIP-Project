<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Guru</title>
</head>

<body>
    <center>
        <h1>HALAMAN GURU</h1>
        <a href="{{route ('guru.create')}}"><button>Tambah</button></a>
        <table border="1">
            <tbody>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>

                </tr>
                @foreach ($guru as $g)
                    <tr>
                        <td>{{ $g->id }}</td>
                        <td>{{ $g->nip }}</td>
                        <td>{{ $g->nama_guru }}</td>
                        <td>{{ $g->jk }}</td>
                        <td>{{ $g->alamat }}</td>
                        <td>
                            <button><a href="{{ route('guru.edit', $g->id) }}">Ubah</a></button>
                            <form action="{{ route('guru.destroy', $g->id) }}" method="POST">
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
