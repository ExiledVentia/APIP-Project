<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inventaris</title>
</head>

<body class="bg-[url('/img/A.png')] bg-center bg-cover h-[90vh] bg-no-repeat w-screen">

    <header>
        <div class="w-screen h-32 bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200 ">
           <div class="flex justify-between items-center mr-12">
     
              <img class="h-auto max-w-56 mt-6 ml-36" src="{{ URL('img/login_logo.jpg') }}" alt="logo">
    
              <a href="http://127.0.0.1:8000/dashboard" class="text-red-600 absolute right-24 mt-9">
                <span>DASHBOARD |</span>
            </a>
            
    
               
                <!-- Dropdown User -->
                <div class="relative inline-block text-left">
                 <button onclick="toggleDropdown()" class="inline-flex items-center justify-center w-full text-red-500 hover:text-red-700 focus:outline-none mt-10">
                     <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="red" class="bi bi-person-circle" viewBox="0 0 16 16">
                         <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                         <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                     </svg>
                 </button>
     
      <!-- Isi Dropdown -->
      <div id="myDropdown" class="absolute right-0 mt-2 w-80 h-80 rounded-md shadow-lg bg-red-200 ring-1 ring-black ring-opacity-5 hidden">
       <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
         
         <!--Propil-->
         <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="red" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-top: 30px; margin-left: 138px;">
           <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
           <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
       </svg>
     
            <!--Pangil Username-->
            <h1 style="text-align: center;">{{ Auth::user()->nama }}</h1>
     
            <!--Garis-->
         <div class="mt-4 grid grid-cols-1 items-center">
           <hr class="border-gray-900">
       </div>
     
     
           <!--Pangil Gmail-->
           <h1 style="text-align: center;">{{ Auth::user()->email }}</h1>
           
     
           <!--Button Edit&Logout-->
           <br>
           <a href="/user" class="flex items-center justify-center mb-3">
             <button type="button" class="w-60 h-7 px-4 py-2 text-sm rounded-xl shadow-md text-black flex items-center justify-center hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                 <span>Edit Profile</span>
             </button>
         </a>
         
         <form method="POST" action="{{ route('logout') }}" class="flex items-center justify-center">
            @csrf
            @method('DELETE') 
            <button type="submit" class="w-60 h-7 px-4 py-2 text-sm rounded-xl shadow-md text-black flex items-center justify-center hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                <span>Logout</span>
            </button>
        </form>

         </div>
     </div>
     </div>
     </div>
     </div>
     </header>

    <!-- Title Section -->
    <h1 class="font-bold text-3xl py-1 relative top-12 left-36">INVENTARIS</h1>

    <!-- Main Content -->
    <div class="overflow-x-auto flex">
        <div class="w-10/12 border rounded-xl px-16 mt-14 py-5 mx-auto bg-gradient-to-r from-rose-400 via-rose-350 to-pink-200">
            <form action="{{ route('barang.search') }}" method="GET" class="flex justify-center mb-4">
                <input type="search" name="query" placeholder="Cari barang..."
                    class="block w-64 p-2 px-4 ps-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    required autocomplete="off" style="margin-left: 971px;">
            </form>

            <div class="flex justify-end mb-4">
                <a href="{{ route('barang.create') }}">
                    <button class="text-black bg-rose-400 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-1.5">
                        + Tambah Barang
                    </button>
                </a>
            </div>

            <!-- Table -->
            <table class="w-full text-sm text-left text-black rounded-lg shadow-md overflow-hidden bg-white">
                <thead class="text-center text-black uppercase bg-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Nama Barang</th>
                        <th scope="col" class="px-6 py-3">Kategori</th>
                        <th scope="col" class="px-6 py-3">Ruangan</th>
                        <th scope="col" class="px-6 py-3">Tahun Masuk</th>
                        <th scope="col" class="px-6 py-3">Sumber Dana</th>
                        <th scope="col" class="px-6 py-3">No Barang</th>
                        <th scope="col" class="px-6 py-3">Kode Barang</th>
                        <th scope="col" class="px-6 py-3">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($barang as $k)
                        <tr class="border-t-2">
                            <td class="px-6 py-3">{{ $k->id }}</td>
                            <td class="px-6 py-3">{{ $k->nama_barang }}</td>
                            <td class="px-6 py-3">{{ $k->kategori }}</td>
                            <td class="px-6 py-3">{{ $k->ruangan }}</td>
                            <td class="px-6 py-3">{{ $k->tahun_masuk }}</td>
                            <td class="px-6 py-3">{{ $k->sumber_dana }}</td>
                            <td class="px-6 py-3">{{ $k->no_barang }}</td>
                            <td class="px-6 py-3">{{ $k->kode_barang }}</td>
                            <td class="px-6 py-3 flex space-x-2">
                                <button>
                                    <a href="{{ route('barang.edit', $k->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                                        <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z"/>
                                      </svg></a>
                                </button>
                                <form action="{{ route('barang.destroy', $k->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                      </svg></button>        
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center py-3">No results found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


    <script>
        // Fungsi untuk menampilkan atau menyembunyikan dropdown
        function toggleDropdown() {
            var dropdown = document.getElementById("myDropdown");
            dropdown.classList.toggle("hidden");
        }
      
        // Tutup dropdown jika pengguna mengklik di luar dropdown
        window.onclick = function(event) {
            if (!event.target.closest('.relative')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('hidden')) {
                        openDropdown.classList.add('hidden');
                    }
                }
            }
        }
      </script>
    </body>
    
    </html>