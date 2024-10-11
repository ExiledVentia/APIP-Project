<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change User Data</title>
</head>
<!-- HTML form for changing student data. -->
<!-- Saya sebagai backend capek asliii - Alif / Ozma -->

<body>
    <center>
        <h1>Change User Data</h1>
        <a href="/user">Back</a>
    </center>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" name="nama" value="{{ old('nama', $user->nama) }}"><br>

        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" value="{{ old('username', $user->username) }}"><br>

        <label for="password">Password:</label>
        <input type="text" class="form-control" name="password" value="{{ old('password', $user->password) }}"><br>

        <label for="email">Email:</label>
        <textarea class="form-control" name="email">{{ old('email', $user->email) }}</textarea><br>

        <button type="submit">Save</button>
    </form>
</body>


</html>
