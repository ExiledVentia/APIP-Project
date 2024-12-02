<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Peminjaman Barang</title>
</head>
<body class="bg-[url('/img/A.png')] bg-center bg-cover h-screen bg-no-repeat w-screen overflow-x-hidden">

<!-- Header -->
<header>
    <div class="h-32 bg-gradient-to-r from-rose-400 via-rose-350 to-pink-200">
       <div class="flex justify-between items-center mx-12">
          <!-- Logo -->
          <img class="h-auto max-w-56 mt-6 ml-8" src="{{ URL('img/login_logo.jpg') }}" alt="logo">
       </div>

       <div class="flex justify-end relative top-[-50px] right-[20px]">
        <a href="/" class="py-2 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
              </svg>
        </a>
    </div>
    
    
    
    </div>
</header>

<!-- Form Section -->
<div class="w-3/6 border rounded-xl px-11 py-10 mt-20 mx-auto bg-gradient-to-r from-rose-400 via-rose-350 to-pink-200" id="formStep1">

    <!-- Form Step 1 -->
    <form id="pinjamForm" action="{{ route('peminjaman.store')}}" method="POST">
        @csrf
        <div class="mb-4">
            <input type="email" name="email" class="w-full h-11 rounded-lg placeholder-pink-600" placeholder="E-Mail" required>
        </div>
        <div class="mb-4">
            <input type="text" name="nama_peminjam" class="w-full h-11 rounded-lg placeholder-pink-600" placeholder="Nama Peminjam" required>
        </div>
        <div class="mb-4">
            <input type="text" name="no_telp" class="w-full h-11 rounded-lg placeholder-pink-600" placeholder="Nomor Telp / WhatsApp" required>
        </div>
        <div class="bg-slate-100 text-pink-600 rounded-md px-2">
            <label class="text-pink-600">Peminjam Sebagai</label>
            <br>
            <input type="radio" name="peminjam" value="siswa" required> <label class="text-pink-600">Siswa</label><br>
            <input type="radio" name="peminjam" value="guru" required> <label class="text-pink-600">Guru</label>
        </div>

    <!-- Button next -->
    <div class="mt-4 mx-auto flex justify-center">
        <button type="button" onclick="nextStep()" id="nextstep" class="py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                <path d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753"/>
            </svg>
        </button>
    </div>
</div>

<!-- Form Section Step 2 (Barang) -->
<div class="w-3/6 border rounded-xl px-11 py-10 mt-10 mx-auto bg-gradient-to-r from-rose-400 via-rose-350 to-pink-200 hidden" id="formStep2">
    <div id="pnjmForm">
        <div class="step mb-4">
            <select name="id_barang" class="w-full h-11 rounded-lg placeholder-pink-600">
                @foreach ($peminjaman as $k)
                <option value="{{$k->id}}">{{$k->nama_barang}}</option>  
                @endforeach  
            </select>    
        </div>
        <div class="step mb-4">
            <input type="text" name="keperluan" class="w-full h-11 rounded-lg placeholder-pink-600" placeholder="Keperluan Peminjaman Barang" required>
        </div>
        <div class="step mb-4">
            <input type="date" name="tgl_pinjam" class="w-full h-11 rounded-lg placeholder-pink-600" required>
        </div>
        <div class="step mb-4">
            <input type="text" name="dari" class="w-full h-11 rounded-lg placeholder-pink-600" placeholder="Dari" required>
        </div>
        <div class="step mb-4">
            <input type="text" name="sampai" class="w-full h-11 rounded-lg placeholder-pink-600" placeholder="Sampai" required>
        </div>
        <div class="flex justify-center">
            <button type="submit" id="submitButton" class="px-4 py-2 w-6/12 bg-gray-500 text-white rounded-md" disabled>KIRIM</button>
        </div>
    </div>
</form>

    <!-- Previous Button -->
    <div class="mt-4 mx-auto flex justify-around">
        <button type="button" onclick="prevStep()" id="prevstep" class="py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                <path d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753"/>
              </svg>
        </button>
    </div>
</div>

<script>
    // Fungsi untuk memeriksa apakah semua field diisi
    function checkFields() {
        const formFields = document.querySelectorAll('#pinjamForm input[required], #pnjmForm input[required]'); // Semua field dengan atribut required
        const submitButton = document.getElementById('submitButton');
        
        let allFilled = true;
        
        // Cek apakah semua field terisi
        formFields.forEach(field => {
            if (!field.value) {
                allFilled = false;
            }
        });
        
        // Kondisi jika semua field sudah diisi
        if (allFilled) {
            submitButton.classList.remove('bg-gray-500');
            submitButton.classList.add('bg-red-500');
            submitButton.disabled = false; // Aktifkan tombol
        } else {
            // Kondisi jika ada field yang kosong
            submitButton.classList.remove('bg-red-500');
            submitButton.classList.add('bg-gray-500');
            submitButton.disabled = true; // Nonaktifkan tombol
        }
    }

    // Menambahkan event listener untuk setiap input form
    const formFields = document.querySelectorAll('#pinjamForm input[required], #pnjmForm input[required]');
    formFields.forEach(field => {
        field.addEventListener('input', checkFields);
    });

    // Mengatur langkah form
    function nextStep() {
        document.getElementById('formStep1').style.display = 'none'; // Sembunyikan form 1
        document.getElementById('formStep2').style.display = 'block'; // Tampilkan form 2
        document.getElementById('nextstep').style.display = 'none'; // Sembunyikan tombol next pada form 1
        document.getElementById('prevstep').style.display = 'block'; // Tampilkan tombol previous pada form 2
    }

    function prevStep() {
        document.getElementById('formStep2').style.display = 'none'; // Sembunyikan form 2
        document.getElementById('formStep1').style.display = 'block'; // Tampilkan form 1
        document.getElementById('nextstep').style.display = 'block'; // Tampilkan tombol next pada form 1
        document.getElementById('prevstep').style.display = 'none'; // Sembunyikan tombol previous pada form 1
    }

    // Cek kondisi saat halaman dimuat
    checkFields();
</script>

</body>
</html>
