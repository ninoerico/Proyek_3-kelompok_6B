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
                                Dashbboard
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

        <section class="p-3 sm:ml-64">
            <div class="mt-14 rounded-lg border-gray-700 p-3">
                <div class="mb-8 grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div
                        class="col-span-1 grid h-48 grid-cols-2 items-start justify-start rounded-2xl bg-white shadow-md"
                    >
                        <div class="flex h-48 flex-col justify-between p-5">
                            <div>
                                <p class="mb-2 text-xl text-gray-500">
                                    Halo,
                                    <br />
                                    <span class="font-bold">Bandyaga</span>
                                </p>
                            </div>
                            <div>
                                <a href="#">
                                    <button
                                        class="bg-btn rounded-3xl px-5 py-1 font-bold text-white"
                                    >
                                        Lihat Kegiatan
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="flex h-48 items-start justify-start">
                            <img
                                src="{{ asset("img/cuate.png") }}"
                                alt="kit"
                                class="h-48 w-full object-cover p-5"
                            />
                        </div>
                    </div>
                    <div
                        class="col-span-2 grid h-48 grid-cols-2 items-start justify-start rounded-2xl bg-white shadow-md"
                    >
                        <div class="flex h-48 flex-col justify-between p-5">
                            <div>
                                <h1
                                    class="mb-2 text-xl font-bold text-gray-500"
                                >
                                    Mentoring Karakter Berbasis Agama (METAGAMA)
                                </h1>
                                <div class="flex">
                                    <svg
                                        class="h-5 w-5 text-gray-500"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <p class="mb-1 ms-2 text-sm text-gray-500">
                                        METAGAMA Politeknik Negeri Bandung
                                    </p>
                                </div>
                                <div class="flex">
                                    <svg
                                        class="h-5 w-5 text-gray-500"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M6 5V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h1a2 2 0 0 1 2 2v2H3V7a2 2 0 0 1 2-2h1ZM3 19v-8h18v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm5-6a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>

                                    <p class="mb-1 ms-2 text-sm text-gray-500">
                                        Sabtu, 2 November 2024
                                    </p>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="">
                                    <button
                                        class="bg-btn rounded-3xl px-5 py-1 font-bold text-white"
                                    >
                                        Detail Kegiatan
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="flex h-48 items-start justify-start">
                            <img
                                src="{{ asset("img/kit.jpg") }}"
                                alt="kit"
                                class="h-48 w-full rounded-r-xl object-cover"
                            />
                            <div
                                class="bg absolute px-6 py-1 font-bold text-white"
                            >
                                Akan Datang
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-10 grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div
                        class="col-span-1 flex h-72 items-start justify-start rounded-2xl bg-white shadow-md"
                    >
                        <p class="m-5 text-xl text-gray-500">
                            Senin,
                            <span class="font-bold">23 Oktober 2024</span>
                        </p>
                    </div>
                    <div
                        class="col-span-2 grid h-72 grid-cols-2 items-start rounded-2xl bg-white shadow-md"
                    >
                        <div class="flex h-72 flex-col justify-between p-5">
                            <div>
                                <h1
                                    class="mb-2 text-xl font-bold text-gray-500"
                                >
                                    Kajian Islam dan Teknologi (KIT)
                                </h1>
                                <div class="flex">
                                    <svg
                                        class="h-5 w-5 text-gray-500"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <p class="mb-1 ms-2 text-sm text-gray-500">
                                        HIMAKOM Politeknik Negeri Bandung
                                    </p>
                                </div>
                                <div class="flex">
                                    <svg
                                        class="h-5 w-5 text-gray-500"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M6 5V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h1a2 2 0 0 1 2 2v2H3V7a2 2 0 0 1 2-2h1ZM3 19v-8h18v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm5-6a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>

                                    <p class="mb-1 ms-2 text-sm text-gray-500">
                                        Jum'at, 25 Oktober 2024
                                    </p>
                                </div>
                                <p
                                    class="mb-1 max-h-28 overflow-auto text-sm text-gray-500"
                                >
                                    Kajian Islam dan Teknologi (KIT) adalah
                                    studi tentang hubungan antara ajaran Islam
                                    dan teknologi. Ini membahas bagaimana
                                    teknologi bisa digunakan untuk kebaikan umat
                                    Islam dan bagaimana nilai-nilai Islam
                                    mempengaruhi penggunaannya.
                                </p>
                            </div>
                            <div>
                                <a href="#" class="">
                                    <button
                                        class="bg-btn rounded-3xl px-5 py-1 font-bold text-white"
                                    >
                                        Detail Kegiatan
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="flex h-72 items-start justify-start">
                            <img
                                src="{{ asset("img/kit.jpg") }}"
                                alt="kit"
                                class="h-72 w-full rounded-r-xl object-cover"
                            />
                            <div
                                class="bg absolute px-6 py-1 font-bold text-white"
                            >
                                Berlangsung
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 justify-between gap-4 sm:grid-cols-2"
                >
                    <p class="flex justify-self-start font-bold text-gray-500">
                        B6 - D3 Teknik Informatika
                    </p>
                    <p class="flex justify-self-end font-bold text-gray-500">
                        DKM Lukmanul Hakim
                    </p>
                </div>
            </div>
        </section>
    </body>
</html>
