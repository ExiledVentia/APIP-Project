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
          
         <a href="user">
         <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="red" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg>
         </a>
      </div>
   </div>
</header>
    

   <center>
   <br>
   <body class="bg-[url('img/A.png')] bg-center bg-cover h-[85vh] w-auto">
   </body>

   <h1 style="font-weight: bold; margin-top: 50px;">SISTEM INFORMASI PEMINJAMAN SARANA DAN PRASARANA</h1>



   <div class="flex justify-between my-36 ml-72 mr-80">
   <div class="inventaris mb-4">
      <a href="barang">
    <button type="button" class="w-72 h-24 rounded-md text-white bg-red-500">INVENTARIS</button>
      </a>
   </div>

   <div class="peminjaman mb-4">
      <a href="#">
        <button type="button" class="w-72 h-24 rounded-md text-white bg-red-500 flex items-center justify-around px-4">
          <span>PEMINJAMAN</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-folder2" viewBox="0 0 16 16">
            <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648  8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5z"/> 
          </svg>
        </button>
      </a>
    </div>
    

   <div class="pengembalian mb-4">
      <a href="#">
    <button type="button" class="w-72 h-24 rounded-md text-white bg-red-500">PENGEMBALIAN</button>
      </a>
   </div>
</div>

</center>

   </div>
</body>
</html>