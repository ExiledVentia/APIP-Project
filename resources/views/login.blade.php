<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
<link rel="stylesheet" href="login.css"/>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
        <div class='w-6/12 center border rounded px-5 mt-28 py-5 mx-auto bg-pink-400'>
    <b><h1 class="text-black text-2xl text-center">Login</h1><br></br>
    <form action="/login" method="POST">
        @csrf
        <div>
            <input type="email" name="email" id="email" class="bg-black border border-black text-black rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-gray-400 dark:text-black- dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
        </div>
        <br>
        <div>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        </div><br>
        <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">Login</button>
    </form>
</div>
</html>
