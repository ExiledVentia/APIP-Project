<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UBAH DATA KELAS</title>
</head>
<!-- HTML form for changing student data. -->

<body>
    <center>
        <h1>UBAH DATA SISWA</h1>
        <a href="/kelas">Kembali</a>
    </center>
    <form action="{{ route('kelas.update', $kelas->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="kelas">Kelas:</label>
        <input type="text" class="form-control" name="kelas" value="{{ old('kelas'), $kelas->kelas }}"><br>

        <label for="ruangan">Ruangan:</label>
        <input type="text" class="form-control" name="ruangan" value="{{ old('ruangan'), $kelas->ruangan }}"><br>

        <label for="lantai">Lantai:</label>
        <input type="text" class="form-control" name="lantai" value="{{ old('lantai'), $kelas->lantai }}"><br>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>
