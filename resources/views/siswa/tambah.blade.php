<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah data siswa</title>
</head>
<!-- HTML form for adding student data. --> 
<body>
    <center>
        <h1>TAMBAH DATA SISWA</h1>
    </center>
    <form action="store" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="jk">Jenis Kelamin:</label>
        <input type="text" name="jk" required><br>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" required><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" required><br>

        <label for="angkatan">Angkatan:</label>
        <input type="text" name="angkatan" required><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
