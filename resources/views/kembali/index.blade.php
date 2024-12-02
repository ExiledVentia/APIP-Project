<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pengembalian Barang</title>
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
</header>

<!-- Form Section Step 1 (Data Peminjam) -->
<div class="w-3/6 border rounded-xl px-11 py-10 mt-20 mx-auto bg-gradient-to-r from-rose-400 via-rose-350 to-pink-200" id="formStep1">
    <form id="kembaliForm" action="{{ route('kembali.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="step mb-4">
            <select name="id_pinjam">
             <option value="">Pilih Peminjaman</option>  
                @foreach ($peminjaman as $k)
                <option value="{{$k->id_pinjam}}">{{$k->nama_barang}}, {{$k->email}}</option>  
                @endforeach  
            </select>    

 

    <!-- Button Next -->
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
 
        @csrf
        <div class="step mb-4">
            <input type="text" name="barang_yg_kembali" class="w-full h-11 rounded-lg placeholder-pink-600" placeholder="Barang Yang Dikembalikan" required>
        </div>
        <div class="step mb-4">
            <!-- Input file -->
            <div class="mt-2 flex items-center space-x-2 text-gray-600">
                <!-- Wrapper untuk input file dan ikon -->
                <label for="foto" class="w-full h-44 rounded-lg border-2 border-black flex items-center justify-center px-3 cursor-pointer" style="background-color: white;">
                    <!-- Input file -->
                    <input type="file" name="foto" id="foto" class="hidden" accept="image/*" required onchange="previewImage(event)">
                    
                    <!-- Preview Image langsung ditampilkan di tempat input -->
                    <img id="imagePreview" class="w-full h-44 object-cover" style="display:none;">
                    
                <!-- Ikon default jika belum ada gambar yang di-upload -->
                <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="45" height="46" viewBox="0 0 16 16" fill="gray" class="bi bi-download mr-2">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                </svg>

                </label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="submit" id="submitButton" class="px-4 py-2 w-6/12 bg-gray-500 text-white rounded-md" disabled>KIRIM</button>
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
        const formFields = document.querySelectorAll('#formStep1 input[required], #formStep2 input[required]'); 
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

    // Preview Image function
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        const iconPreview = document.getElementById('icon');
        imagePreview.style.display = 'block';
        imagePreview.src = URL.createObjectURL(event.target.files[0]);
        iconPreview.style.display = 'none';
        checkFields();
    }

    // Menambahkan event listener untuk setiap input form pada form pertama (formStep1)
    const formFields = document.querySelectorAll('#formStep1 input[required]');
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