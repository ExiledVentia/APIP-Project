<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inventaris</title>
</head>

<body class="bg-[url('img/A.png')] bg-center bg-cover h-[90vh] w-screen">
    <center>
        <h1>Inventaris</h1>

        <!-- Search Form -->
        <form action="{{ route('barang.search') }}" method="GET">
            <div>
                <input type="search" name="query" placeholder="Cari barang..." required autocomplete="off" />
                <button type="submit">Cari</button>
            </div>
        </form>

        <!-- Add Data Button -->
        <a href="{{ route('barang.create') }}"><button>Add Data</button></a>

        <!-- Table for Displaying Barang Data -->
       

<div class="relative overflow-x-auto">
    <div class='w-fit center border rounded-xl px-16 mt-28 py-5 mx-auto bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200'>
    <table class="w-3/5 text-sm text-left rtl:text-right text-black dark:text-black">
        <thead class="text-xs text-white uppercase bg-white dark:text-black">
            <tr>
                <th scope="col" class="px-6 py-3 border-b dark:border-black">
                    No
                </th>
                <th scope="col" class="px-6 py-3 border-b dark:border-black">
                    Nama Barang
                </th>
                <th scope="col" class="px-6 py-3 border-b dark:border-black">
                    Kode Barang
                </th>
                <th scope="col" class="px-6 py-3 border-b dark:border-black">
                    Jumlah
                </th>
                <th scope="col" class="px-6 py-3 border-b dark:border-black">
                    Kode Area
                </th>
                <th scope="col" class="px-6 py-3 border-b dark:border-black">
                    Tahun Masuk
                </th>
                <th scope="col" class="px-6 py-3 border-b dark:border-black">
                    Sumber Dana
                </th>
                <th scope="col" class="px-6 py-3 border-b dark:border-black">
                    Opsi
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                    1
                </th>
                <th>
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
            <tr class="bg-white border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                    2
                </th>
                <th>
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
            </tr>
            <tr class="bg-white border-b dark:border-black">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                 3
                </th>
                 <th>
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
            </tr>
            <tr class="bg-white border-b dark:border-black">
  
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                 4
                 </th>      
                <th>
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
            </tr>
            <tr class="bg-white border-b dark:border-black">
  
                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                    5
                </th>      
                <th>
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
            </tr>
        </tbody>
    </table>
</div>

                <!-- Display Search Results or All Barang Data -->
                @forelse ($barang as $k)
                    <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama_barang }}</td>
                        <td>{{ $k->kategori }}</td>
                        <td>{{ $k->ruangan }}</td>
                        <td>{{ $k->tahun_masuk }}</td>
                        <td>{{ $k->sumber_dana }}</td>
                        <td>{{ $k->no_barang }}</td>
                        <td>{{ $k->kode_barang }}</td>
                        <td>
                            <button><a href="{{ route('barang.edit', $k->id) }}">Edit</a></button>
                            <form action="{{ route('barang.destroy', $k->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">No results found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </center>
</body>

</html>
