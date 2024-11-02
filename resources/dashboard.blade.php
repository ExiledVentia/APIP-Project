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
  
<<header>
    <div class="container">
       <div class=" flex justify-start">
          <img class="h-auto max-w-56 mt-0" src="{{ URL('img/login_logo.jpg') }}" alt="logo">
       <div class="mt-1 flex justify-end">
    <a href="{{route ('login')}}"><button type="button" class="w-8/12 rounded-xl text-red-700">Login</button></a>
       </div>
        </ul>
    </div>
 </header>

   <div class="peminjaman mb-4">
    <button type="button" class="w-72 h-10 rounded-xl text-white bg-red-500">Peminjaman</button>
   </div>

   <div class="pengembalian mb-4">
    <button type="button" class="w-72 h-10 rounded-xl text-white bg-red-500">Pengembalian</button>
   </div>

   </div>
</body>
</html>