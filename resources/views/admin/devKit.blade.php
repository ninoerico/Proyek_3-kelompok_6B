<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Development Kit Sikahim</title>
        @vite("resources/css/app.css")
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </head>
    <body>
        <div>
            <nav class="bg-[#93b5b3] flex justify-between p-5 fixed top-0 left-0 right-0 z-10">
                <div>
                    INI LOGO
                </div>
                <div>
                    INI BREADCRUMB
                </div>
                <div>
                    INI PROFILE PICTURE
                </div>
            </nav>
            <div class="grid grid-cols-6 min-h-screen pt-[80px]">
                <aside class="bg-[#646969] col-span-1 h-screen sticky top-[80px]">
                    <ul class="px-2 py-5 font-semibold text-gray-400">
                        <a href="#">
                            <li  class="px-3 py-2 hover:bg-gray-200 rounded-3xl">Dashboard</li>
                        </a>
                        <a href="#">
                            <li class="px-3 py-2 hover:bg-gray-200 rounded-3xl">Kalendar</li>
                        </a>
                        <a href="#">
                            <li class="px-3 py-2 hover:bg-gray-200 rounded-3xl">Kegiatan</li>
                        </a>
                        <a href="#">
                            <li class="px-3 py-2 hover:bg-gray-200 rounded-3xl">Metagama</li>
                        </a>
                        <a href="#">
                            <li class="px-3 py-2 hover:bg-gray-200 rounded-3xl">Infaq dan Sodaqoh</li>
                        </a>
                    </ul>
                </aside>
                <section class="bg-[#2da89e] col-span-5 overflow-y-auto">
                    <div class="p-5">INI CONTENT</div>
                </section>
            </div>
        </div>
    </body>
</html>
