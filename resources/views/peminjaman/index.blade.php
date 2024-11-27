<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>ADD BARANG DATA</title>
    </head>
    
    <body class="bg-[url('/img/A.png')] bg-center bg-cover h-[90vh] bg-no-repeat w-screen">
    <header>
        <div class="h-32 bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200 ">
           <div class="flex justify-between items-center mr-12">
    
              <img class="h-auto max-w-56 mt-6 ml-32" src="{{ URL('img/login_logo.jpg') }}" alt="logo">
    
              <a href="http://127.0.0.1:8000/dashboard" class="text-red-600 absolute right-24 mt-9">
                <span>DASHBOARD | </span>
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
    
                          <!--Profil-->
                          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="red" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-top: 30px; margin-left: 138px;">
                              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                          </svg>
    
                          <!--Panggil Username-->
                          <h1 style="text-align: center;">{{ Auth::user()->nama }}</h1>
    
                          <!--Garis-->
                          <div class="mt-4 grid grid-cols-1 items-center">
                              <hr class="border-gray-900">
                          </div>
    
                          <!--Panggil Gmail-->
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
    
    
        <div class='w-3/6   border rounded-xl px-11 mt-20 py-20 mx-auto bg-gradient-to-r from-rose-400 from-10% via-rose-350 to-pink-200'> 
            <form id="barangForm" action="{{route('barang.store')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email"></label>
                    <input type="text" name="email" class="w-full h-11 rounded-lg placeholder-pink-600" placeholder=" E-Mail" required>
                </div>
                <div class="mb-4">
                    <label for="nama_peminjam"></label>
                    <input type="text" name="nama_peminjam" class="w-full h-11 rounded-lg placeholder-pink-600" placeholder=" Nama Peminjaman / Penanggung Jawab" required>
                </div>
                <div class="mb-4 ">
                    <label for="nomor_telp"></label>
                    <input type="text" name="nomor_telp" class="w-full h-11 rounded-lg placeholder-pink-600" placeholder=" Nomor Telp / WhatsApp Yang Dapat Dihubungi" required>
                </div>
                <div class="bg-slate-100 text-pink-600 rounded-md px-2">
                    <label class="text-pink-600">Peminjam Sebagai</label>
                    <br>
                    <input type="radio" name="peminjam" class="w-50 rounded-lg " required>
                    <label class="text-pink-600" >Siswa</label>
                    <br>
                    <input type="radio" name="peminjam" class="w-50  rounded-lg " required>
                    <label class="text-pink-600" >Guru</label>
                </div>

            </form>
        </div>
        <button type="button" onclick="nextstep()" id="nextStep">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right absolute right-80 top-96" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
              </svg>
        </button>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const barangForm = document.getElementById('barangForm');
        const formFields = barangForm.querySelectorAll('input');
        const submitButton = barangForm.querySelector('button[type="submit"]');
        const dropdown = document.getElementById("myDropdown");
    
        // Fungsi untuk mengecek apakah semua field terisi
        function checkFields() {
            let allFilled = true;
            formFields.forEach(field => {
                if (field.value === '') {
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
    
        // Tambahkan event listener ke setiap input untuk memeriksa input saat diisi
        formFields.forEach(field => {
            field.addEventListener('input', checkFields);
        });
    
        // Cek kondisi saat halaman dimuat
        checkFields();
    });
</script>
<script>
    let currentStep = 0;

    function showStep(step){
        const steps = document.querySelectorAll('.step');
        steps.forEach((s, index) => {
            s.classList.add('hidden');
            if (index === step){
                s.classList.remove('hidden');
            }
        });
    }

    function nextStep(){
        if (currentStep < 2){
            currentStep++;
            showStep(currentStep);
        }
    }

    function prevStep(){
        if (currentStep > 0){
            currentStep--;
            showStep(currentStep);
        }
    }
</script>
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
    
</body>
</html>