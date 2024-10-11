<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD USER DATA</title>
</head>
<!-- HTML form for adding user data. --> 
<body>
    <center>
        <h1>ADD USER DATA</h1>
    </center>
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">password:</label>
        <input type="password" name="password" required><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" required></textarea><br>

        <label for="jk">Jenis Kelamin:</label>
        <label for="laki">Laki-Laki</label>
        <input type="radio" id="laki" name="jk" value="Laki-Laki">
        <label for="laki">Perempuan</label>
        <input type="radio" id="perempuan" name="jk" value="Perempuan"><br>

        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" required><br>

        <button type="submit" href="{{route ('user.index')}}">Submit</button>
    </form>
</body>

</html>
