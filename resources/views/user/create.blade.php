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

        <label for="email">Email:</label>
        <textarea name="email" required></textarea><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
