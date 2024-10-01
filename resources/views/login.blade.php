<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite("resources/css/app.css")
    </head>
    <body>
        <!-- component -->
        <!-- component -->
        <div class="flex h-screen items-center justify-center bg-sky-100">
            <!-- Left: Image -->
            <div class="hidden h-screen w-1/2 lg:block">
                <img
                    src="https://img.freepik.com/fotos-premium/imagen-fondo_910766-187.jpg?w=826"
                    alt="Placeholder Image"
                    class="h-full w-full object-cover"
                />
            </div>
            <!-- Right: Login Form -->
            <div class="sm:20 w-full p-8 md:p-52 lg:w-1/2 lg:p-36">
                <h1 class="mb-4 text-2xl font-semibold">Login</h1>
                <form action="#" method="POST">
                    <!-- Username Input -->
                    <div class="mb-4 bg-sky-100">
                        <label for="username" class="block text-gray-600">
                            Username
                        </label>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none"
                            autocomplete="off"
                        />
                    </div>
                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-800">
                            Password
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none"
                            autocomplete="off"
                        />
                    </div>
                    <!-- Remember Me Checkbox -->
                    <div class="mb-4 flex items-center">
                        <input
                            type="checkbox"
                            id="remember"
                            name="remember"
                            class="text-red-500"
                        />
                        <label for="remember" class="ml-2 text-green-900">
                            Remember Me
                        </label>
                    </div>
                    <!-- Forgot Password Link -->
                    <div class="mb-6 text-blue-500">
                        <a href="#" class="hover:underline">Forgot Password?</a>
                    </div>
                    <!-- Login Button -->
                    <button
                        type="submit"
                        class="w-full rounded-md bg-red-500 px-4 py-2 font-semibold text-white hover:bg-blue-600"
                    >
                        Login
                    </button>
                </form>
                <!-- Sign up  Link -->
                <div class="mt-6 text-center text-green-500">
                    <a href="#" class="hover:underline">Sign up Here</a>
                </div>
            </div>
        </div>
    </body>
</html>
