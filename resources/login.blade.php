<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
<link rel="stylesheet" href="login.css"/>
</head>
<body>
  
<center>
        <div class='w-50 center border rounded px-3 py-3 mx-auto'>
     <h1>Login</h1>
     <form action="/login" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label"></label>
            <input type="text" id="username" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label"></label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</center>



</div>
</html>
