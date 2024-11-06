<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title>SIKAHIM</title>
</head>
<body>
    <div class="flex h-screen items-center justify-center bg-sky-100">
        <div class="w-full p-8 md:p-52 lg:w-1/2 lg:p-36">
            <h1 class="mb-4 text-center text-2xl font-semibold">
                Buat Akun
            </h1>

            <form action="{{ route('sign.up.submit') }}" method="POST">
                @csrf
                <div class="mb-4 bg-sky-100">
                    <label for="name" class="block font-bold text-gray-800">Nama Lengkap:</label>
                    <input type="text" name="name" id="name" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none" required>
                </div>
                <div class="mb-4 bg-sky-100">
                    <label for="email" class="block font-bold text-gray-800">Alamat Email:</label>
                    <input type="email" name="email" id="email" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none" required>
                </div>
                <div class="mb-4 bg-sky-100">
                    <label for="password" class="block font-bold text-gray-800">Kata Sandi:</label>
                    <input type="password" name="password" id="password" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none" required>
                </div>
                <div class="mb-4 bg-sky-100">
                    <label for="password_confirmation" class="block font-bold text-gray-800">Konfirmasi Kata Sandi:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none" required>
                </div>

                <button type="submit" class="w-full rounded-md bg-green-500 px-4 py-2 font-semibold text-white hover:bg-gray-600">
                    Daftar
                </button>
            </form>

            <div class="text-gray-800 mt-2 text-center">
                <p>
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="font-bold hover:underline">
                        Masuk di sini
                    </a>
                </p>
            </div>
        </div>

        <!-- Optional Image Section -->
        <div class="hidden h-screen w-1/2 lg:block">
            <img
                src="{{ asset('img/mosque.png') }}"
                alt="sign up image"
                class="h-full w-full object-cover"
            />
        </div>
    </div>
</body>
</html>
