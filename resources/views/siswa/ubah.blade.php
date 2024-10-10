<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UBAH data siswa</title>
</head>
<!-- HTML form for changing student data. -->

<body>
    <center>
        <h1>UBAH DATA SISWA</h1>
        <a href="/siswa">Kembali</a>
    </center>
    <form action="update" method="POST">
        @csrf
        @method('POST')
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" name="nama" value="{{ old('nama'), $siswa->nama }}"><br>

        <label for="jk">Jenis Kelamin:</label>
        <input type="text" class="form-control" name="jk" value="{{ old('jk'), $siswa->jk }}"><br>

        <label for="kelas">Kelas:</label>
        <input type="text" class="form-control" name="kelas" value="{{ old('kelas'), $siswa->kelas }}"><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" class="form-control" name="jurusan" value="{{ old('jurusan'), $siswa->jurusan }}"><br>

        <label for="angkatan">Angkatan:</label>
        <input type="text" class="form-control" name="angkatan" value="{{ old('angkatan'), $siswa->angkatan }}"><br>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>
