<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD USER DATA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[url('/img/background.jpg')] bg-center bg-cover h-[85vh] bg-no-repeat w-screen overflow-x-hidden">

    <div class='w-4/12 border rounded-xl px-16 mt-20 py-8 mx-auto bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200'>
        <center>
            <h1 class="text-white font-semibold">TAMBAH USER</h1>
        </center>
        
        <!-- Form for adding user data -->
        <form action="{{route('user.store')}}" method="POST">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <!-- Nama Field -->
                <div class="sm:col-span-2">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Name" required>
                </div>

                <!-- Username Field -->
                <div class="w-full">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Username" required>
                </div>

                <!-- Password Field -->
                <div class="w-full">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Password" required>
                </div>

                <!-- Email Field -->
                <div class="w-full">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email" required>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="inline-flex items-center px-4 py-2 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg border-2 border-primary-800 focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Add User
            </button>
            
        <!-- SweetAlert -->
        @include('sweetalert::alert')
    </div>
</body>

</html>
