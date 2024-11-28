<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

    <body class="bg-[url('img/background.jpg')] bg-center bg-cover bg-no-repeat h-[80vh] w-screen">
    <center>
        <div class="container mx-auto mt-10">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Data Admin</h1>
            
            <!-- Tombol Add Data -->
            <a href="{{ route('user.create') }}">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mb-4">Add Data</button>
            </a>

            <!--Kembali-->
            <a href="dashboard"> 
                <button class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Back</button>
            </a>
        </div>

            <!-- Tabel User -->
            <div class="overflow-x-auto">
                <table class="min-w-fit bg-white shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-gradient-to-r from-rose-400 from-10% via-pink-500 to-pink-300 text-white">
                        <tr>
                            <th class="py-3 px-6 text-left">No</th>
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-left">Username</th>
                            <th class="py-3 px-6 text-left">Password</th>
                            <th class="py-3 px-6 text-left">Email</th>
                            <th class="py-3 px-6 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($user as $k)
                            <tr class="border-b">
                                <td class="py-3 px-6">{{ $k->id }}</td>
                                <td class="py-3 px-6">{{ $k->nama }}</td>
                                <td class="py-3 px-6">{{ $k->username }}</td>
                                <td class="py-3 px-6" style="-webkit-text-security: disc; text-security: disc;">{{ $k->password }}</td>
                                <td class="py-3 px-6">{{ $k->email }}</td>
                                <td class="py-3 px-6 flex space-x-2">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('user.edit', $k->id) }}">
                                        <button class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Edit</button>
                                    </a>
                                    
                                    <!-- Form Delete -->
                                    <form action="{{ route('user.destroy', $k->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600" data-confirm-delete = "true" >Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </center>

    @include('sweetalert::alert')
</body>

</html>
