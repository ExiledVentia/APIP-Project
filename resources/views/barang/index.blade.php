<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventaris</title>
</head>

<body>
    <center>
        <h1>Inventaris</h1>

        <!-- Search Form -->
        <form action="{{ route('barang.search') }}" method="GET">
            <div>
                <input type="search" name="query" placeholder="Cari barang..." required autocomplete="off" />
                <button type="submit">Cari</button>
            </div>
        </form>

        <!-- Add Data Button -->
        <a href="{{ route('barang.create') }}"><button>Add Data</button></a>

        <!-- Table for Displaying Barang Data -->
        <table border="1">
            <tbody>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Ruangan</th>
                    <th>Tahun Masuk</th>
                    <th>Sumber Dana</th>
                    <th>No Barang</th>
                    <th>Kode Barang</th>
                    <th>Aksi</th>
                </tr>

                <!-- Display Search Results or All Barang Data -->
                @forelse ($barang as $k)
                    <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama_barang }}</td>
                        <td>{{ $k->kategori }}</td>
                        <td>{{ $k->ruangan }}</td>
                        <td>{{ $k->tahun_masuk }}</td>
                        <td>{{ $k->sumber_dana }}</td>
                        <td>{{ $k->no_barang }}</td>
                        <td>{{ $k->kode_barang }}</td>
                        <td>
                            <button><a href="{{ route('barang.edit', $k->id) }}">Edit</a></button>
                            <form action="{{ route('barang.destroy', $k->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">No results found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </center>
</body>

</html>
