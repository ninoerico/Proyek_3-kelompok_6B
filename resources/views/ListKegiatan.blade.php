<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            Sikahim | List kegiatan 
        </title>

        @vite('resources/css/app.css')

        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </head>

    <body>
        <nav
            class="fixed top-0 z-50 w-full border-b border-gray-200 bg-gray-300 dark:border-gray-700 dark:bg-gray-800"
        >
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div
                        class="flex items-center justify-start rtl:justify-end"
                    >
                        <button
                            data-drawer-target="logo-sidebar"
                            data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar"
                            type="button"
                            class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 sm:hidden dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                        <a
                            href="https://flowbite.com"
                            class="ms-2 flex md:me-24"
                        > r
                            <img
                                src="https://flowbite.com/docs/images/logo.svg"
                                class="me-3 h-8"
                                alt="FlowBite Logo"
                            />
                            <span
                                class="self-center whitespace-nowrap text-xl font-semibold sm:text-2xl dark:text-white"
                            >
                                SIKAHIM
                            </span>
                        </a>
                    </div>
                    <div class="flex items-center">
                        <div class="ms-3 flex items-center">
                            <div>
                                <button
                                    type="button"
                                    class="flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                    aria-expanded="false"
                                    data-dropdown-toggle="dropdown-user"
                                >
                                    <span class="sr-only">Open user menu</span>
                                    <img
                                        class="h-8 w-8 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                        alt="user photo"
                                    />
                                </button>
                            </div>
                            <div
                                class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
                                id="dropdown-user"
                            >
                                <div class="px-4 py-3" role="none">
                                    <p
                                        class="text-sm text-gray-900 dark:text-white"
                                        role="none"
                                    >
                                        Bandyaga Adiansyah
                                    </p>
                                    <p
                                        class="truncate text-sm font-medium text-gray-900 dark:text-gray-300"
                                        role="none"
                                    >
                                        bandyagaadiansyah@gmail.com
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem"
                                        >
                                            Lihat Aktivitas
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem"
                                        >
                                            Kelola Akun
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
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
            class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-white pt-20 transition-transform sm:translate-x-0 dark:border-gray-700 dark:bg-gray-800"
            aria-label="Sidebar"
        >
            <div
                class="h-full overflow-y-auto bg-white px-3 pb-4 dark:bg-gray-800"
            >
                <ul class="space-y-2 font-medium">
                    <li>
                        <a
                            href="#"
                            class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        >
                            <svg
                                class="h-5 w-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 22 21"
                            >
                                <path
                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"
                                />
                                <path
                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"
                                />
                            </svg>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        >
                            <svg
                                class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 18"
                            >
                                <path
                                    d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"
                                />
                            </svg>
                            <span class="ms-3 flex-1 whitespace-nowrap">
                                Kalender
                            </span>
                        </a>
                    </li>
                    <li>
                        <button
                            type="button"
                            class="group flex w-full items-center rounded-lg p-2 text-base text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-example"
                            data-collapse-toggle="dropdown-example"
                        >
                            <svg
                                class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 18 21"
                            >
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"
                                />
                            </svg>
                            <span
                                class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right"
                            >
                                Kegiatan
                            </span>
                            <svg
                                class="h-3 w-3"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 10 6"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m1 1 4 4 4-4"
                                />
                            </svg>
                        </button>
                        <ul id="dropdown-example" class="hidden space-y-2 py-2">
                            <li>
                                <a
                                    href="#"
                                    class="group flex w-full items-center rounded-lg p-2 pl-11 text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                >
                                    List Kegiatan
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="group flex w-full items-center rounded-lg p-2 pl-11 text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                >
                                    Buat Kegiatan
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="group flex w-full items-center rounded-lg p-2 pl-11 text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                >
                                    Evaluasi Kegiatan
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        >
                            <svg
                                class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 18 16"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"
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
 
        <!-- Konten utama -->
        <div class="lg:ml-72 mt-24 p-2 sm:p-4 md:p-6 min-h-[calc(100vh-50px)]">
            <div class="bg-gray-200 rounded-xl shadow-[0_10px_20px_rgba(0,0,0,0.25)] h-full">
                <div class="bg-white p-4 md:p-6 rounded-lg shadow">
                    <h2 class="text-center text-lg sm:text-xl md:text-2xl mb-4">
                        Kegiatan <b> Lukmanul Hakim </b> Politeknik Negeri Bandung
                    </h2>
            
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs sm:text-sm md:text-base">
                            <thead>
                                <tr class="border-b border-gray-600">
                                    <th class="py-2">Nama Kegiatan</th>
                                    <th class="py-2">Tanggal Pelaksanaan</th>
                                    <th class="py-2">Jenis Kegiatan</th>
                                    <th class="py-2">Kuota</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Baris 1 -->
                                <tr>
                                    <td class="py-2">
                                        <a class="text-gray-600" href="#">Kajian Islam dan Teknologi</a>
                                    </td>
                                    <td class="py-2">20 September 2024</td>
                                    <td class="py-2">Kajian</td>
                                    <td class="py-2">Tanpa batas</td>
                                </tr>
                                <!-- Baris 2 -->
                                <tr>
                                    <td class="py-2">
                                        <a class="text-gray-600" href="#">Kajian Islam dan Teknologi</a>
                                    </td>
                                    <td class="py-2">20 September 2024</td>
                                    <td class="py-2">Kajian</td>
                                    <td class="py-2">Tanpa batas</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="flex items-center justify-between flex-col lg:flex-row gap-4 text-center">
                <p class="text-gray-600 font-semibold text-xs sm:text-sm md:text-base">DKM - Masjid Lukmanul Hakim POLBAN</p> 
                <p class="text-gray-600 font-semibold text-xs sm:text-sm md:text-base">B6 - D3 Teknik Informatika POLBAN</p>
            </div>
        </footer>

    </body>

</html>