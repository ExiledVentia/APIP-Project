<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD BARANG DATA</title>
</head>
<!-- HTML form for adding user data. --> 
<body>
    <center>
        <h1>ADD BARANG DATA</h1>
    </center>
    <form action="{{route('barang.store')}}" method="POST">
        @csrf
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required><br>

        <label for="kategori">Kategori:</label>
        <input type="text" name="kategori" required><br>

        <label for="ruangan">Ruangan:</label>
        <input type="text" name="ruangan" required><br>

        <label for="tahun_masuk">Tahun Masuk:</label>
        <input type="date" name="tahun_masuk" required><br>

        <label for="sumber_dana">Sumber Dana:</label>
        <input type="text" name="sumber_dana" required><br>

        <label for="no_barang">No Barang:</label>
        <input type="number" name="no_barang" required><br>

        <label for="kode_barang">Kode Barang:</label>
        <input type="text" name="kode_barang" required><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
