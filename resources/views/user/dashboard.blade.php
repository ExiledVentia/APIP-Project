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
   <div class="container">
      <div class=" flex justify-start">
         <img class="h-auto max-w-56 mt-0" src="{{ URL('img/login_logo.jpg') }}" alt="logo">
      </div>
       </ul>
   </div>
</header>
    
    
   <center>
   <br>
   <div class="inventaris">
    <button type="button" class="w-7/12 text-white bg-rose-400">Inventaris</button>
   </div>

   <div class="peminjaman">
    <button type="button" class="w-7/12 rounded-xl text-white bg-rose-400">Peminjaman</button>
   </div>

   <div class="pengembalian">
    <button type="button" class="w-7/12 rounded-xl text-white bg-rose-400">Pengembalian</button>
   </div>
</center>
   </div>
</body>
</html>