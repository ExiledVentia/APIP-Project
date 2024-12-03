
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inventaris</title>
</head>

<body class="bg-[url('/img/A.png')] bg-center bg-cover h-[90vh] bg-no-repeat w-screen overflow-x-hidden">

    <header>
        <div class="h-32 bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200 ">
           <div class="flex justify-between items-center mr-12">
    
              <img class="h-auto max-w-56 mt-6 ml-32" src="{{ URL('img/login_logo.jpg') }}" alt="logo">
    
              <a href="http://127.0.0.1:8000/dashboard" class="text-red-600 absolute right-24 mt-9">
                <span>DASHBOARD | </span>
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
    
                          <!--Profil-->
                          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="red" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-top: 30px; margin-left: 138px;">
                              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                          </svg>
    
                          <!--Panggil Username-->
                          <h1 style="text-align: center;">{{ Auth::user()->nama }}</h1>
    
                          <!--Garis-->
                          <div class="mt-4 grid grid-cols-1 items-center">
                              <hr class="border-gray-900">
                          </div>
    
                          <!--Panggil Gmail-->
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
   <h1 class="font-bold text-3xl py-1 relative top-12 left-36">PENGEMBALIAN</h1>

   <!-- Main Content -->
   <div class="overflow-x-auto">
       <div class="w-10/12 border rounded-xl px-16 mt-14 py-5 mx-auto bg-gradient-to-r from-rose-400 via-rose-350 to-pink-200">


           <!-- Table -->
           <table class="w-full text-sm text-left text-black rounded-lg shadow-md overflow-hidden bg-white">
               <thead class="text-center text-black uppercase bg-white">
                   <tr>
                       <th scope="col" class="px-6 py-3">No</th>
                       <th scope="col" class="px-6 py-3">Email</th>
                       <th scope="col" class="px-6 py-3">Nama Peminjam</th>
                       <th scope="col" class="px-6 py-3">No_telp</th>
                       <th scope="col" class="px-6 py-3">Peminjam Sebagai</th>
                       <th scope="col" class="px-6 py-3">Barang Dikembalikan</th>
                       <th scope="col" class="px-6 py-3">Bukti</th>
                       <th scope="col" class="px-6 py-3">Opsi</th>
                   </tr>
               </thead>
               <tbody>
                   @forelse ($pengembalian as $k)
                       <tr class="border-t-2 text-center">
                           <td class="px-6 py-3">{{ $k->id }}</td>
                           <td class="px-6 py-3">{{ $k->email }}</td>
                           <td class="px-6 py-3">{{ $k->nama_peminjam }}</td>
                           <td class="px-6 py-3">{{ $k->no_telp }}</td>
                           <td class="px-6 py-3">{{ $k->peminjam }}</td>
                           <td class="px-6 py-3">{{ $k->nama_barang}}</td>
                           <td class="px-6 py-3">{{ $k->foto }}</td>
                           <td class="px-6 py-3 flex space-x-2">
                               <form action="{{ route('kembali.hapus', $k->id) }}" method="POST"
                                   style="display:inline;">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="btn btn-danger flex flex-col items-center space-y-1" data-confirm-delete="true" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                      </svg>
                                </button>        
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
      @include('sweetalert::alert')
    </body>
    
    
    </html>