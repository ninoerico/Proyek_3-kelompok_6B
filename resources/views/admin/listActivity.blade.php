<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            Sikahim | List Kegiatan
        </title>
        <!-- Importing Vite CSS -->
        @vite('resources/css/app.css')
        <!-- Importing Flowbite JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        <style>
            .bg {
                background-color: #93b5b3;
            }
            .bg-btn {
                background-color: #93b5b3;
                transition: background-color 0.3s ease;
            }
            .bg-btn:hover {
                background-color: #78a1a1;
            }
        </style>
    </head>
    <body class="bg-gray-200">
        <nav class="bg fixed top-0 z-30 w-full shadow-md">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <button
                            data-drawer-target="logo-sidebar"
                            data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar"
                            type="button"
                            class="inline-flex items-center rounded-lg p-2 text-sm text-gray-400 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 lg:hidden"
                        >
                            <span class="sr-only">Open sidebar</span>
                            <svg
                                class="h-6 w-6"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    clip-rule="evenodd"
                                    fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ol class="flex items-center whitespace-nowrap">
                            <li class="inline-flex items-center">
                                <a
                                    class="flex items-center text-sm text-slate-100 hover:text-slate-200 focus:text-slate-200 focus:outline-none"
                                    href="#"
                                >
                                    Home
                                </a>
                                <svg
                                    class="mx-2 size-5 shrink-0 text-slate-200"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M6 13L10 3"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                    ></path>
                                </svg>
                            </li>
                            <li
                                class="inline-flex items-center truncate text-sm font-semibold italic text-slate-100"
                                aria-current="page"
                            >
                                List Activity
                            </li>
                        </ol>
                    </div>
                    <div class="flex items-center">
                        <div class="ms-3 flex items-center">
                            <div class="flex items-center justify-evenly gap-5">
                                <div class="flex items-center gap-3">
                                    <p
                                        class="text-md font-semibold italic text-gray-600"
                                    >
                                        Bandyaga Adiansyah
                                    </p>
                                    <button
                                        type="button"
                                        class="flex rounded-full bg-gray-500 text-sm focus:ring-2 focus:ring-gray-500"
                                        aria-expanded="false"
                                        data-dropdown-toggle="dropdown-user"
                                    >
                                        <span class="sr-only">
                                            Open user menu
                                        </span>
                                        <img
                                            class="h-8 w-8 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                            alt="user photo"
                                        />
                                    </button>
                                </div>
                            </div>
                            <div
                                class="z-50 my-10 hidden list-none divide-y divide-gray-600 rounded bg-gray-700 text-base shadow"
                                id="dropdown-user"
                            >
                                <div class="px-4 py-3 text-center" role="none">
                                    <p class="text-sm text-white" role="none">
                                        Bandyaga Adiansyah
                                    </p>
                                    <p
                                        class="truncate text-sm font-medium text-gray-300"
                                        role="none"
                                    >
                                        aga@gmail.com
                                    </p>
                                </div>
                                <ul class="py-1 font-semibold" role="none">
                                    <li>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-600 hover:text-white"
                                            role="menuitem"
                                        >
                                            Kelola Akun
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-600 hover:text-red-400"
                                            role="menuitem"
                                        >
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <aside
            id="logo-sidebar"
            class="bg-teal fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full pt-10 transition-transform sm:translate-x-0 dark:bg-slate-600"
            aria-label="Sidebar"
        >
            <div class="h-full overflow-y-auto bg-slate-600 px-3 pb-4">
                <a href="adminDashboard" class="ms-2 flex pb-10 md:me-24">
                    <img
                        src="https://flowbite.com/docs/images/logo.svg"
                        class="me-3 h-8"
                        alt="FlowBite Logo"
                    />
                    <span
                        class="self-center whitespace-nowrap text-xl font-bold sm:text-2xl dark:text-white"
                    >
                        SIKAHIM
                    </span>
                </a>
                <ul class="space-y-5 font-bold">
                    <li>
                        <a
                            href="adminDashboard"
                            class="group flex items-center rounded-lg p-2 text-white hover:bg-gray-700"
                        >
                            <svg
                                class="h-5 w-5 flex-shrink-0 text-gray-400 transition duration-75 group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="ms-3 flex-1 whitespace-nowrap">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/calendar"
                            class="group flex items-center rounded-lg p-2 text-white hover:bg-gray-700"
                        >
                            <svg
                                class="h-5 w-5 flex-shrink-0 text-gray-400 transition duration-75 group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="ms-3 flex-1 whitespace-nowrap">
                                Kalender
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/admin/listActivity"
                            class="group flex items-center rounded-lg p-2 text-white hover:bg-gray-700"
                        >
                            <svg
                                class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="ms-3 flex-1 whitespace-nowrap">
                                Kegiatan
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/donate"
                            class="group flex items-center rounded-lg p-2 text-white hover:bg-gray-700"
                        >
                            <svg
                                class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="3"
                                    d="M8 17.345a4.76 4.76 0 0 0 2.558 1.618c2.274.589 4.512-.446 4.999-2.31.487-1.866-1.273-3.9-3.546-4.49-2.273-.59-4.034-2.623-3.547-4.488.486-1.865 2.724-2.899 4.998-2.31.982.236 1.87.793 2.538 1.592m-3.879 12.171V21m0-18v2.2"
                                />
                            </svg>
                            <span class="ms-3 flex-1 whitespace-nowrap">
                                Infaq dan Sodaqoh
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>     
        </aside>
        
        <section>
            <div class="md:ml-64 p-4 mt-24">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8 mb-8">
                    <!-- Buat kegiatan -->
                    <div class="md:col-span-1 grid h-48 grid-cols-2 items-start justify-start rounded-2xl bg-white shadow-md">
                        <div class="flex h-48 flex-col justify-between p-5">
                            <div>
                                <p class="mb-2 text-xl text-gray-500">
                                    Halo,
                                    <br />
                                    <span class="font-bold">Mau Buat kegiatan?</span>
                                </p>
                            </div>
                            <div>
                                <a href="#">
                                    <button class="bg-btn rounded-3xl px-5 py-1 font-bold text-white">
                                        Buat Kegiatan
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="flex h-48 items-start justify-start">
                            <img
                                src="{{ asset('img/buatkgt.png') }}"
                                alt="kit"
                                class="h-48 w-full object-cover p-5"
                            />
                        </div>
                    </div>
        
                    <!-- Status -->
                    <div class="md:col-span-2 bg-white p-4 rounded-2xl shadow-md">
                        <div class="text-gray-500 font-semibold mb-4">Jadwal Sholat</div>
                        <div class="grid grid-cols-2 md:grid-cols-5 text-center text-gray-500 gap-4">
                            <div>
                                <div class="text-2xl ">04:03</div>
                                <div>Subuh</div>
                            </div>
                            <div>
                                <div class="text-2xl ">11:33</div>
                                <div>Zuhur</div>
                            </div>
                            <div>
                                <div class="text-2xl ">14:48</div>
                                <div>Asar</div>
                            </div>
                            <div>
                                <div class="text-2xl ">17:43</div>
                                <div>Magrib</div>
                            </div>
                            <div>
                                <div class="text-2xl ">18:55</div>
                                <div>Isya</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
                <!-- Tabel Kegiatan -->
                <div class=" md:mr-10 md:ml-10 bg-white p-4 rounded-2xl shadow-md mb-8 overflow-x-auto">
                    <div class="text-gray-500 font-semibold mb-4">
                        Kegiatan <span class="font-bold">Lukmanul Hakim</span> Politeknik Negeri Bandung
                    </div>
                    <table class="w-full text-left text-xs sm:text-sm md:text-base">
                        <thead>
                            <tr class=" text-gray-500">
                                <th class="pb-2">Nama Kegiatan</th>
                                <th class="pb-2">Tanggal Pelaksanaan</th>
                                <th class="pb-2">Jenis Kegiatan</th>
                                <th class="pb-2">Kuota</th>
                            </tr>
                            <hr>
                        </thead>
                        <tbody>
                            <tr class="text-gray-500">
                                <td class="py-2">
                                    <a class="text-gray-500" href="#">Kajian Islam dan Teknologi</a>
                                </td>
                                <td class="py-2">20 September 2024</td>
                                <td class="py-2">Kajian</td>
                                <td class="py-2">Tanpa batas</td>
                            </tr>
                            <tr class="text-gray-500">
                                <td class="py-2">
                                    <a class="text-gray-500" href="#">Kajian Islam dan Teknologi</a>
                                </td>
                                <td class="py-2">20 September 2024</td>
                                <td class="py-2">Kajian</td>
                                <td class="py-2">Tanpa batas</td>
                            </tr>
                            <tr class="text-gray-500">
                                <td class="py-2">
                                    <a class="text-gray-500" href="#">Kajian Islam dan Teknologi</a>
                                </td>
                                <td class="py-2">20 September 2024</td>
                                <td class="py-2">Kajian</td>
                                <td class="py-2">Tanpa batas</td>
                            </tr>
                            <tr class="text-gray-500">
                                <td class="py-2">
                                    <a class="text-gray-500" href="#">Kajian Islam dan Teknologi</a>
                                </td>
                                <td class="py-2">20 September 2024</td>
                                <td class="py-2">Kajian</td>
                                <td class="py-2">Tanpa batas</td>
                            </tr>
                            <tr class="text-gray-500">
                                <td class="py-2">
                                    <a class="text-gray-500" href="#">Kajian Islam dan Teknologi</a>
                                </td>
                                <td class="py-2">20 September 2024</td>
                                <td class="py-2">Kajian</td>
                                <td class="py-2">Tanpa batas</td>
                            </tr>
                            <tr class="text-gray-500">
                                <td class="py-2">
                                    <a class="text-gray-500" href="#">Kajian Islam dan Teknologi</a>
                                </td>
                                <td class="py-2">20 September 2024</td>
                                <td class="py-2">Kajian</td>
                                <td class="py-2">Tanpa batas</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        
                <!-- Footer -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <p class="font-bold text-gray-500 justify-self-start">B6 - D3 Teknik Informatika</p>
                    <p class="font-bold text-gray-500 justify-self-end">DKM Lukmanul Hakim</p>
                </div>
            </div>
        </section>
        
        
    </body>
</html>
