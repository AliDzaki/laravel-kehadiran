<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-sky-50">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 ">
        <div class="absolute top-2 left-3">
            <button id="sb-btn" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                aria-controls="logo-sidebar" type="button"
                class="p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400  dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>
        </div>
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-center   rtl:justify-end ">
                <a href="https://flowbite.com" class="flex self-center ms-3   md:me-24">
                    <h2 class=" text-2xl font-semibold sm:text-2xl whitespace-nowrap ">Daftar Hadir</h2>
                </a>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full  bg-white border-r border-gray-200 sm:translate-x-0 "
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white ">
            <div class="border-b border-gray-500 pb-3">
                <div class="flex items-center justify-center  mb-2">
                    <img class="w-14 h-14 rounded-full"
                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </div>
                <div class="px-2 py-2">
                    <h2 class="text-xl font-bold text-gray-700 text-center">Fikri Dzaki Ali</h2>
                    <h2 class="text-sm font-medium text-gray-700 text-center">XI PPLG A</h2>
                </div>
            </div>

            <ul class="space-y-2 font-medium mt-5">
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-sky-100  group">
                        <img width="30" height="30"
                            src="https://img.icons8.com/ios-filled/50/attendance-mark.png" alt="attendance-mark" />
                        <span class="ms-3">Kehadiran</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-sky-100  group">
                        <img width="30" height="30"
                            src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-attendance-human-resources-flaticons-lineal-color-flat-icons-2.png"
                            alt="external-attendance-human-resources-flaticons-lineal-color-flat-icons-2" />
                        <span class="flex-1 ms-3 whitespace-nowrap">Rekap kehadiran</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-red-300  group">
                        <img width="30" height="30" src="https://img.icons8.com/color/48/exit.png"
                            alt="logout" />
                        <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        @yield('content')
    </div>
</body>
<script src="{{ asset('js/script.js') }}"></script>

</html>
