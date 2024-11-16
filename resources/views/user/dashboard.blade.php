<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
<link rel="stylesheet" href="login.css"/>
<script src="https://cdn.tailwindcss.com"></script>
</head> 


<header>
   <div class="h-32 bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200 ">
      <div class="flex justify-between items-center mr-12">

         <img class="h-auto max-w-56 mt-6 ml-28" src="{{ URL('img/login_logo.jpg') }}" alt="logo">
          
           <!-- Dropdown User -->
           <div class="relative inline-block text-left">
            <button onclick="toggleDropdown()" class="inline-flex items-center justify-center w-full text-red-500 hover:text-red-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="red" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </button>

 <!-- Isi Dropdown -->
 <div id="myDropdown" class="absolute right-0 mt-2 w-80 h-80 rounded-md shadow-lg bg-red-200 ring-1 ring-black ring-opacity-5 hidden">
  <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
    
    <!--Propil-->
    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="red" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-top: 30px; margin-left: 140px;">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
  </svg>

      <!--Panggil username dan email menggunakan auth-->
      <!--btw formatting htmlny asli merah2 ~ Alif ~ -->

      <!--Pangil Username-->
      <h1 style="text-align: center;">{{ Auth::user()->nama }}</h1>


      <!--Garis-->
    <div class="mt-4 grid-cols-1 items-center">
      <hr class="border-gray-900">
  </div>


      <!--Pangil Email-->
      <h1 style="text-align: center;">{{ Auth::user()->email }}</h1>



      <!--Button Edit&Logout-->
      <br>
      <a href="user" class="flex items-center justify-center mb-3">
        <button type="button" class="w-60 h-7 px-4 py-2 text-sm rounded-xl shadow-md text-black flex items-center justify-center hover:bg-gray-100 hover:text-gray-900" role="menuitem">
            <span>Edit Profile</span>
        </button>
    </a>
    
    <a href="#" class="flex items-center justify-center">
        <button type="button" class="w-60 h-7 px-4 py-2 text-sm rounded-xl shadow-md text-black flex items-center justify-center hover:bg-gray-100 hover:text-gray-900" role="menuitem">
            <span>Logout</span>
        </button>
    </a>
    
  
    </div>
</div>
</div>
</div>
</div>
</header>

    

   
   <body class="bg-[url('img/A.png')] bg-center bg-cover h-[85vh] w-auto">
    <center>

   <h1 style="font-weight: bold; margin-top: 50px;">SISTEM INFORMASI PEMINJAMAN SARANA DAN PRASARANA</h1>



   <div class="flex justify-between my-28 ml-72 mr-80">

   <div class="inventaris mb-4">
      <a href="barang">
    <button type="button" class="w-72 h-28 mr-1 rounded-md text-white bg-red-500 flex items-center justify-around px-4">
      <span>INVENTARIS</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-list-columns-reverse" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 0 .5m4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10A.5.5 0 0 1 4 .5m-4 2A.5.5 0 0 1 .5 2h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 4h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 6h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 8h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
        </svg>
       </button>
      </a>
   </div>

   <div class="peminjaman mb-4">
      <a href="#">
        <button type="button" class="w-72 h-28 mr-1 rounded-md text-white bg-red-500 flex items-center justify-around px-4">
          <span>PEMINJAMAN</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-folder2" viewBox="0 0 16 16">
            <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648  8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5z"/> 
          </svg>
        </button>
      </a>
    </div>
    

    <div class="pengembalian mb-4">
      <a href="#">
        <button type="button" class="w-72 h-28 rounded-md text-white bg-red-500 flex items-center justify-around px-4">
          <span>PENGEMBALIAN</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-folder2-open" viewBox="0 0 16 16">
        <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z"/>
      </svg>
    </button>
   </div>
</div>

</center>
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