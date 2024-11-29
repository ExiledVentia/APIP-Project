<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Change Barang Data</title>
</head>
<!-- HTML form for changing student data. -->


<body class="bg-[url('/img/A.png')] bg-center bg-cover h-[90vh] w-screen overflow-x-hidden">
    <header>
        <div class="h-32 bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200 ">
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
   
    


        <center>
            <h1 class="font-bold text-3xl py-2 relative top-4">EDIT</h1>
            <div class='w-3/6 center border rounded-xl px-11 mt-4 py-5 mx-auto bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200'> 
                <table class="w-auto text-sm text-left rtl:text-right text-black dark:text-black">

    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama_barang" class="block text-sm font-medium text-gray-700"></label>
            <input type="text" class="form-control mt-1 block w-full px-3 py-2 border border-gray-300 rounded-sm shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
             name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}">
        </div>

        <div class="mb-4">
            <label for="kategori" class="block text-sm font-medium text-gray-700"></label>
            <input type="text" class="form-control mt-1 block w-full px-3 py-2 border border-gray-300 rounded-sm shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
            name="kategori" value="{{ old('kategori', $barang->kategori) }}">
        </div>

        <div class="mb-4">
            <label for="ruangan" class="block text-sm font-medium text-gray-700"></label>
            <input type="text" class="form-control mt-1 block w-full px-3 py-2 border border-gray-300 rounded-sm shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
             name="ruangan" value="{{ old('ruangan', $barang->ruangan) }}">
        </div>

        <div class="mb-4">
            <label for="tahun_masuk" class="block text-sm font-medium text-gray-700"></label>
            <input type="date" class="form-control mt-1 block w-full px-3 py-2 border border-gray-300 rounded-sm shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
            name="tahun_masuk" value="{{ old('tahun_masuk', $barang->tahun_masuk) }}">
        </div>

        <div class="mb-4">
            <label for="sumber_dana" class="block text-sm font-medium text-gray-700"></label>
            <input type="text" class="form-control mt-1 block w-full px-3 py-2 border border-gray-300 rounded-sm shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
            name="sumber_dana" value="{{ old('sumber_dana', $barang->sumber_dana) }}">
        </div>

        <div class="mb-4">
            <label for="no_barang" class="block text-sm font-medium text-gray-700"></label>
            <input type="text" class="form-control mt-1 block w-full px-3 py-2 border border-gray-300 rounded-sm shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
            name="no_barang" value="{{ old('no_barang', $barang->no_barang) }}">
        </div>

        <div class="mb-4">
            <label for="kode_barang" class="block text-sm font-medium text-gray-700"></label>
            <input type="text" class="form-control mt-1 block w-full px-3 py-2 border border-gray-300 rounded-sm shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
            name="kode_barang" value="{{ old('kode_barang', $barang->kode_barang) }}">
        </div>

        <button type="submit" class="w-80 mr-7 bg-red-700 text-white font-semibold py-2 px-4 rounded-sm hover:bg-red-800">Edit</button>
        <a href="/dashboard"> 
            <button type="button" class="w-80 text-white bg-red-700 hover:bg-red-800 font-medium rounded-sm text-sm py-2.5 ">Back</button>
        </a>
    </form>

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