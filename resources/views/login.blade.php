<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title>SIKAHIM Login</title>
    <style>
        /* CSS for icon positioning */
        .password-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }
        .password-icon {
            position: absolute;
            right: 10px;
            cursor: pointer;
            color: #6b7280;
        }
        .password-input {
            padding-right: 2.5rem;
        }
    </style>
</head>
<body>
    <div class="flex h-screen items-center justify-center bg-sky-100">
        <div class="sm:20 w-full p-8 md:p-52 lg:w-1/2 lg:p-36">
            <h1 class="mb-4 text-center text-2xl font-bold">
                Masuk ke SIKAHIM
            </h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4 bg-sky-100 mx-16">
                    <label for="email" class="block font-bold text-gray-800">
                        Email
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan email Anda"
                        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-green-500 focus:outline-none"
                        autocomplete="off"
                        value="{{ old('email') }}"
                    />
                </div>
                <div class="mb-4 bg-sky-100 mx-16">
                    <label for="password" class="block font-bold text-gray-800">
                        Kata Sandi
                    </label>
                    <div class="password-wrapper">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan kata sandi Anda"
                            class="password-input w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-green-500 focus:outline-none"
                            autocomplete="off"
                        />
                        <svg 
                            id="eyeIcon" 
                            class="password-icon w-6 h-6 text-gray-200" 
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" 
                            width="24" 
                            height="24" 
                            fill="none" 
                            viewBox="0 0 24 24"
                            onclick="togglePassword()"
                        >
                            <path 
                                id="eyePath1" 
                                stroke="currentColor" 
                                stroke-width="2" 
                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                            <path 
                                id="eyePath2" 
                                stroke="currentColor" 
                                stroke-width="2" 
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                    </div>
                </div>
                <div class="mx-16">
                    <button type="submit" class="w-full rounded-lg bg-green-500 px-4 py-2 font-semibold text-white hover:bg-green-600">
                        Login
                    </button>
                </div>
            </form>
            @if ($errors->any())
                <div class="mx-16 mt-4 text-red-500 p-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="text-gray-1000 mt-6 text-center">
                <p>
                    Belum punya akun?
                    <a href="signup" class="text-green-500 font-bold hover:underline">
                        Sign Up di sini!
                    </a>
                </p>
            </div>
        </div>
        <div class="hidden h-screen w-1/2 lg:block">
            <img src="{{ asset('img/mosque.jpg') }}" alt="login image" class="h-full w-full object-cover"/>
        </div>
    </div>

    <!-- Script for Toggle Password Visibility -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const eyePath1 = document.getElementById("eyePath1");
            const eyePath2 = document.getElementById("eyePath2");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";

                // Ubah path untuk ikon "eye slash" saat password terlihat
                eyePath1.setAttribute("d", "M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5");
                eyePath2.setAttribute("d", "M10 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0Z");
            } else {
                passwordInput.type = "password";

                // Ubah path kembali ke ikon "eye" saat password disembunyikan
                eyePath1.setAttribute("d", "M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z");
                eyePath2.setAttribute("d", "M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z");
            }
        }
    </script>
</body>
</html>
