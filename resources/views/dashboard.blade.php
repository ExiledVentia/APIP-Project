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
       <div class="container">
          
      <div class="flex justify-between items-center">
          <img class="h-auto max-w-56 mt-3 " src="{{ URL('img/login_logo.jpg') }}" alt="logo">
          
       <div class="mt-1 flex justify-end">

    <a href="{{route ('login')}}">
         <button type="button" class="w-40 text-white ml-4 mt-7 bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">Login</button>
   </a>

   
       </div>
 </header>
<br>
<div class="flex justify-between my-40 ml-80 mr-80">
   <div class="peminjaman">
    <button type="button" class="w-72 h-20 rounded-md text-white bg-red-500">Peminjaman</button>
   </div>

   <div class="pengembalian">
    <button type="button" class="w-72 h-20 rounded-md text-white bg-red-500">Pengembalian</button>
   </div>
   
</div>
<div class="mt-1 flex justify-end items-center">
    <img class="h-auto max-w-56 mt-0" src="{{ URL('img/backwebsitekiri (2).jpg') }}" alt="bg-kanan" class="w-50 h-50">
</div>
</body>
</html>