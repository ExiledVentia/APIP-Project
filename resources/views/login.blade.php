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
<body class="bg-[url('img/background.jpg')] bg-center bg-cover bg-no-repeat h-[80vh] w-screen">
        <div class='w-4/12 center border rounded-xl px-16 mt-28 py-5 mx-auto bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200'>
    <h1 class="text-black text-2xl text-center font-bold">LOGIN</h1><br></br>
    <form action="/login" method="POST">
        @csrf
        <div class="relative">
            <input type="email" name="email" id="email" class="bg-black border border-black text-black rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3.5 dark:bg-white dark:border-white dark:placeholder-gray-400 dark:text-black- dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person absolute top-5 right-5 translate-y-0" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
              </svg>
        </div>
        <br>
        <div class="relative">
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-black rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock absolute top-4 right-5 translate-y-0" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
              </svg>
        <br></div>
        <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">Login</button>
        <div class="mt-10 grid grid-cols-1 items-center">
            <hr class="border-gray-900">
        </div>
        <br>
        <div class="mt-1 flex justify-center items-center">
            <img class="h-auto max-w-56 mt-0" src="{{ URL('img/login_logo.jpg') }}" alt="logo">
        </div>
    </form>
</div>
</html>
