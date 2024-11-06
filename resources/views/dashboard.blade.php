<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
<link rel="stylesheet" href="login.css"/>
<script src="https://cdn.tailwindcss.com"></script>
</head> 
  
<header>
       <div class="h-32 bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200 ">
      <div class="flex justify-between items-center">
          <img class="h-auto max-w-56 mt-6 ml-28" src="{{ URL('img/login_logo.jpg') }}" alt="logo">

    <a href="{{route ('login')}}">
         <button type="button" class="w-36 text-white mr-5 mt-8 bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">Login</button>
   </a>

</div>

 </header>
<br>
    <h1 style="font-weight: bold; margin-top: 50px; text-align:center;">SISTEM INFORMASI PEMINJAMAN SARANA DAN PRASARANA</h1>
<div class="flex justify-between my-36 ml-80 mr-80">
   <div class="peminjaman">
    <button type="button" class="w-72 h-20 rounded-md text-white bg-red-500">Peminjaman</button>
   </div>

   <div class="pengembalian">
    <button type="button" class="w-72 h-20 rounded-md text-white bg-red-500">Pengembalian</button>
   </div>
   
</div>
<div class="mt-1 flex justify-end items-center">
    <img class="h-auto max-w-56 mt-0" src="{{ URL('img/A.png') }}" alt="bg-kk" class="w-50 h-50">
</div>
</body>
</html>