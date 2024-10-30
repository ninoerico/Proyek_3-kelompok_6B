<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIKAHIM Login</title>
    @vite("resources/css/app.css") <!-- Integrasi Vite untuk Tailwind -->
</head>
<body class="bg-[#D9D9D9]"> <!-- Set background color for the entire body -->
    <!-- Header Atas -->
    <header class="bg-[#93B5B3] h-12 flex items-center justify-center text-white"></header>

    <!-- Main Content: Flex container untuk form login dan gambar -->
    <div class="flex h-[calc(100vh-96px)] items-center justify-center">
        <!-- Left: Login Form -->
        <div class="w-full p-8 lg:w-1/2 lg:p-36">
            <!-- Logo dan Judul -->
            <div class="flex items-center mb-4">
                <img src="/img/logo.png" alt="SIKAHIM Logo" class="h-16 mr-4" />
                <h1 class="text-3xl font-bold text-[#000000]">SIKAHIM</h1>
            </div>
            <p class="text-xl text-[#63707E] text-center mt-1">Sistem Kegiatan Masjid Lukmanul Hakim POLBAN</p>

            <!-- Kotak dengan bayangan untuk Form -->
            <div class="bg-white shadow-lg rounded-2xl p-8 mt-6">
                <h1 class="mb-4 text-2xl font-semibold text-[#93B5B3] text-center">Masuk ke SIKAHIM</h1>

                <!-- Formulir Login -->
                <form action="{{ route('login') }}" method="POST" id="loginForm">
                    @csrf <!-- Tambahkan CSRF token untuk keamanan -->
                    
                    <!-- Error Handling -->
                    @if ($errors->any())
                        <div class="text-red-500">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email" class="block text-[#93B5B3]">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-[#93B5B3] focus:outline-none"
                            autocomplete="off"
                        />
                        <p id="emailError" class="text-red-500 text-sm hidden">Email belum terisi</p>
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password" class="block text-[#93B5B3]">Kata Sandi</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-[#93B5B3] focus:outline-none"
                            autocomplete="off"
                        />
                        <p id="passwordError" class="text-red-500 text-sm hidden">Password belum terisi</p>
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="text-[#93B5B3]" />
                        <label for="remember" class="ml-2 text-[#93B5B3]">Simpan informasi login</label>
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="mb-6 text-[#93B5B3]">
                        <a href="#" class="hover:underline">Lupa kata sandi?</a>
                    </div>

                    <!-- Login Button -->
                    <button
                        type="submit"
                        class="w-full rounded-md bg-[#93B5B3] px-4 py-2 font-semibold text-white hover:bg-[#7FA19F] active:bg-[#658D8A]"
                    >
                        Login
                    </button>

                    <p id="loginError" class="text-red-500 text-sm hidden mt-3">Username tidak tersedia atau password salah</p>
                </form>

                <!-- Sign up Link -->
                <div class="mt-6 text-center text-[#93B5B3]">
                    <a href="#" class="hover:underline">Tidak punya akun? <span class="font-bold">Sign Up di sini</span></a>
                </div>
            </div>
        </div>

        <!-- Right: Background Image -->
        <div class="hidden lg:block lg:w-1/2 h-full">
            <img src="/img/bg.png" alt="Masjid Image" class="h-full w-full object-cover" />
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#93B5B3] h-12 flex items-center justify-center text-white">
        <p class="text-sm">B6 - D3 Teknik Informatika POLBAN</p>
    </footer>

    <!-- JavaScript for form validation -->
    <script>
        document.getElementById("loginForm").addEventListener("submit", function (event) {
            // Mengambil nilai input
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            // Error messages
            var emailError = document.getElementById("emailError");
            var passwordError = document.getElementById("passwordError");
            var loginError = document.getElementById("loginError");

            // Reset error state
            emailError.classList.add("hidden");
            passwordError.classList.add("hidden");
            loginError.classList.add("hidden");

            // Kondisi Validasi
            var hasError = false;

            if (!email) {
                emailError.classList.remove("hidden");
                hasError = true;
            }
            if (!password) {
                passwordError.classList.remove("hidden");
                hasError = true;
            }

            // Cegah pengiriman form jika ada error
            if (hasError) {
                event.preventDefault();
                return;
            }
        });
    </script>
</body>
</html>
