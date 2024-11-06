<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            Sikahim | Sistem Pengelolaan Kegiatan Masjid Lukmanul Hakim
        </title>
        @vite("resources/css/app.css")
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </head>
    <body>
        <section class="m-5">
            <h1 class="mb-5 text-xl">Ini Halaman Donate</h1>
            <a href="admin/adminDashboard">
                <button
                    class="rounded-3xl font-semibold bg-green-200 px-5 py-1 hover:bg-green-500"
                >
                    Kembali
                </button>
            </a>
        </section>
    </body>
</html>
