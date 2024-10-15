<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Barang Data</title>
</head>
<!-- HTML form for changing student data. -->
<!-- Saya sebagai backend capek asliii - Alif / Ozma -->

<body>
    <center>
        <h1>Change Barang Data</h1>
        <a href="/barang">Back</a>
    </center>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" class="form-control" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}" ><br>

        <label for="kategori">Kategori:</label>
        <input type="text" class="form-control" name="kategori" value="{{ old('kategori', $barang->kategori) }}"><br>

        <label for="ruangan">Ruangan:</label>
        <input type="text" class="form-control" name="ruangan" value="{{ old('ruangan', $barang->ruangan) }}"><br>

        <label for="tahun_masuk">Tahun Masuk:</label>
        <input type="date" class="form-control" name="tahun_masuk" value="{{ old('tahun_masuk', $barang->tahun_masuk) }}"><br>

        <label for="sumber_dana">Sumber Dana:</label>
        <input type="text" class="form-control" name="sumber_dana" value="{{ old('sumber_dana', $barang->sumber_dana) }}"><br>

        <label for="no_barang">No Barang:</label>
        <input type="text" class="form-control" name="no_barang" value="{{ old('no_barang', $barang->no_barang) }}"><br>

        <button type="submit">Save</button>
    </form>
</body>


</html>
