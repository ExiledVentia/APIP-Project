<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="user.css"/>
    <title>Change User Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    </style>
</head>
<!-- HTML form for changing admin data. -->

<body>
    <br><body class="bg-cover bg-center h-screen overflow-x-hidden" style="background-image: url('{{ asset('img/background.jpg') }}')">

    <form action="{{ route('user.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
            <div class='w-4/12 center border rounded-xl px-16 mt-20 py-5 mx-auto bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200'>
        <h1 class="text-black text-2xl text-center font-bold">EDIT PROFILE</h1><br></br>
        <form action="/edit" method="POST">

            <form action="{{ route('user.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="flex justify-center">
                <input type="text" name="username" id="username" class="bg-black border border-black text-black rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3.5 dark:bg-white dark:border-white dark:placeholder-gray-400 dark:text-black- dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" value="{{ $user->username }}">
            </div>
            <br>
            <div>
                <input type="email" name="email" id="email" class="bg-black border border-black text-black rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3.5 dark:bg-white dark:border-white dark:placeholder-gray-400 dark:text-black- dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" value="{{ $user->email }}">
            </div>
            <br>
            <div class="relative">
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-black rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock absolute top-4 right-5 translate-y-0" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
                  </svg>
            <br></div>
            

            <button type="submit" class="w-44 mr-5 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5  dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
            <a href="/user"> 
                <button type="button" class="w-44 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm py-2.5  dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">Back</button>
            </a>
        </div>
        </form>
    </div>
    @include('sweetalert::alert')
</body>
    </html>