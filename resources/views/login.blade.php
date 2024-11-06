<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite("resources/css/app.css")
        <title>SIKAHIM Login</title>
    </head>
    <body>
        <!-- component -->
        <div class="flex h-screen items-center justify-center bg-sky-100">
            <!-- Left: Login Form -->
            <div class="sm:20 w-full p-8 md:p-52 lg:w-1/2 lg:p-36">
                <h1 class="mb-4 text-center text-2xl font-semibold">
                    Masuk ke SIKAHIM
                </h1>
                <form action="{{ route("login") }}" method="POST">
                    @csrf
                    <div class="mb-4 bg-sky-100">
                        <label
                            for="email"
                            class="block font-bold text-gray-800"
                        >
                            Email
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="user@example.com"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none"
                            autocomplete="off"
                            value="{{ old("email") }}"
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            for="password"
                            class="block font-bold text-gray-800"
                        >
                            Kata Sandi
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan 6 karakter atau lebih"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none"
                            autocomplete="off"
                        />
                    </div>
                    <button
                        type="submit"
                        class="w-full rounded-md bg-green-500 px-4 py-2 font-semibold text-white hover:bg-gray-600"
                    >
                        Login
                    </button>
                </form>
                @if ($errors->any())
                    <div class="mt-4 bg-red-500 p-2 text-white">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Sign up  Link -->
                <div class="text-gray-1000 mt-6 text-center">
                    <p>
                        Belum punya akun?
                        <a href="#" class="font-bold hover:underline">
                            Sign Up di sini
                        </a>
                    </p>
                </div>
            </div>
            <!-- Right: Image -->
            <div class="hidden h-screen w-1/2 lg:block">
                <img
                    src="{{ asset("img/mosque.png") }}"
                    alt="login image"
                    class="h-full w-full object-cover"
                />
            </div>
        </div>
    </body>
</html>
