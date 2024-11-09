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
       <div class="h-32 bg-gradient-to-r rounded-xl- from-rose-400 from-10% via-rose-350 to-pink-200 ">
      <div class="flex justify-between items-center">
          <img class="h-auto max-w-48 mt-10 ml-16" src="{{ URL('img/login_logo.jpg') }}" alt="logo">

    <a href="{{route ('login')}}">
         <button type="button" class="w-36 text-white mr-5 mt-9 bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">Login</button>
   </a>

</div>

 </header>
<br>
<body class="bg-[url('img/A.png')] bg-center bg-cover h-[90vh] w-screen">

    <h1 style="font-weight: bold; margin-top: 40px; text-align:center;">SISTEM INFORMASI PEMINJAMAN SARANA DAN PRASARANA</h1>
<div class="flex justify-between my-28 ml-96 mr-96">
    <div class="peminjaman mb-4">
        <a href="#">
          <button type="button" class="w-72 h-28 ml-16 rounded-md text-white bg-red-500 flex items-center justify-around px-4">
            <span>PEMINJAMAN</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-folder2" viewBox="0 0 16 16">
              <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648  8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5z"/> 
            </svg>
          </button>
        </a>
      </div>

   <div class="pengembalian mb-4">
      <a href="#">
        <button type="button" class="w-72 h-28 mr-20 rounded-md text-white bg-red-500 flex items-center justify-around px-4">
          <span>PENGEMBALIAN</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-folder2-open" viewBox="0 0 16 16">
        <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z"/>
      </svg>
    </button>
   </div>

</body>

</div>



 

</div>
</body>
</html>