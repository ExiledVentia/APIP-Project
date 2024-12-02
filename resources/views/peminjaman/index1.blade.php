<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data Admin</title>
</head>
<body class="bg-[url('/img/A.png')] bg-center bg-cover h-[90vh] bg-no-repeat w-fit overflow-x-hidden ">

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
    <h1 class="font-bold text-3xl py-1 relative top-12 left-36">PEMINJAMAN</h1>

    <!-- Main Content -->
    <div class="overflow-x-auto flex">
        <div class="w-10/12 border rounded-xl px-16 mt-14 py-5 mx-auto bg-gradient-to-r from-rose-400 via-rose-350 to-pink-200">
           
            <!-- Table -->
            <table class="w-full text-sm text-left text-black rounded-lg shadow-md overflow-hidden bg-white">
                <thead class="text-center text-black uppercase bg-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Nama Peminjaman</th>
                        <th scope="col" class="px-6 py-3">No telp</th>
                        <th scope="col" class="px-6 py-3">Peminjam Sebagai</th>
                        <th scope="col" class="px-6 py-3">Barang Yang Dipinjam</th>
                        <th scope="col" class="px-6 py-3">Keperluan</th>
                        <th scope="col" class="px-6 py-3">Lama Peminjaman</th>
                        <th scope="col" class="px-6 py-3">Dari</th>
                        <th scope="col" class="px-6 py-3">Sampai</th>
                        <th scope="col" class="px-6 py-3">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($peminjaman as $k)
                        <tr class="border-t-2">
                            <td class="px-6 py-3">{{ $k->id }}</td>
                            <td class="px-6 py-3">{{ $k->email}}</td>
                            <td class="px-6 py-3">{{ $k->nama_peminjam }}</td>
                            <td class="px-6 py-3">{{ $k->no_telp}}</td>
                            <td class="px-6 py-3">{{ $k->peminjam }}</td>
                            <td class="px-6 py-3">{{ $k->id_barang }}</td>
                            <td class="px-6 py-3">{{ $k->keperluan }}</td>
                            <td class="px-6 py-3">{{ $k->tgl_pinjam }}</td>
                            <td class="px-6 py-3">{{ $k->dari }}</td>
                            <td class="px-6 py-3">{{ $k->sampai }}</td>

                            <td class="px-6 py-3 flex space-x-2">
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
                            <td colspan="14" class="text-center py-3 ">No results found.</td>
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