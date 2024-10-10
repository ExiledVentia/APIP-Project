<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah data kelas</title>
</head>
<!-- HTML form for adding student data. --> 
<body>
    <center>
        <h1>TAMBAH DATA KELAS</h1>
    </center>
    <form action="{{route('kelas.store')}}" method="POST">
        @csrf
        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" required><br>

        <label for="ruangan">Ruangan:</label>
        <input type="text" name="ruangan" required><br>

        <label for="lantai">Lantai:</label>
        <input type="text" name="lantai" required><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
