<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/style.css">
    <title>{{ $title }} | UMN Medical Center</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            font-family: 'Bitter', serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body class="text-black">

    <!-- start: Sidebar -->
    <div
        class="fixed left-0 top-0 w-64 h-full bg-[#415C3F] p-4 z-[9999] sidebar-menu transition-transform -translate-x-full">
        <div class="flex items-center justify-between pb-4 border-b border-b-white">
            <a href="/" class="font-bold text-white ml-3">
                <img src="{{ asset('assets/logo/MedicWhite_highres.png') }}" alt="Medic White Logo" class="w-32">
            </a>
            <button class="sidebar-close">
                <i class="ri-close-large-line text-white"></i>
            </button>
        </div>
        <ul class="mt-4">
            <li class="mb-1 group active">
                <a href="/dashboard"
                    class="flex items-center py-2 px-4 hover:bg-gray-400 hover:text-gray-100 rounded-md {{ $title == 'Dashboard' ? 'bg-gray-300 text-black' : 'text-gray-300'}}">
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="/dashboard/pengajuan"
                    class="flex items-center py-2 px-4 hover:bg-gray-400 hover:text-gray-100 rounded-md {{ $title == 'Pengajuan Jasa' ? 'bg-gray-300 text-black' : 'text-gray-300'}}">
                    <span class="text-sm">Pengajuan</span>
                </a>
            </li>
            @if (Auth::user()->is_admin == 1)
            <li class="mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-400 hover:text-gray-100 rounded-md {{ $title == 'Akun' ? 'bg-gray-300 text-black' : 'text-gray-300'}}">
                    <span class="text-sm">Akun</span>
                </a>
            </li>
            @endif
            <li class="mb-1 group">
                <a href="/"
                    class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-400 hover:text-gray-100 rounded-md group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <span class="text-sm">Home</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main class="w-full bg-gray-50 min-h-screen transition-all main">
        <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-[999]">
            <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>
            <ul class="items-center text-sm ml-4 hidden sm:flex">
                <li class="mr-2">
                    <a href="/dashboard" class="text-gray-400 hover:text-gray-600 font-medium">Dashboard</a>
                </li>
                <li class="text-gray-600 mr-2 font-medium">/</li>
                <li class="text-gray-600 mr-2 font-medium">
                    @if ($title == 'Dashboard')
                    Overview
                    @elseif ($title == 'Pengajuan Jasa')
                    Pengajuan
                    @elseif ($title)
                    <a href="/dashboard/pengajuan" class="text-gray-400 hover:text-gray-600 font-medium">Pengajuan</a>
                <li class="text-gray-600 mr-2 font-medium">/</li>
                {{ $title }}
                @elseif ($title == 'Akun')
                Akun
                @endif
                </li>
            </ul>

            <ul class="ml-auto flex items-center">
                <li class="dropdown">
                    <button type="button"
                        class="dropdown-toggle text-gray-400 w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600 relative">
                        <i class="ri-notification-3-line"></i>
                        @if (!is_null($notification) && count($notification) > 0)
                        <div class="rounded-full w-3.5 h-3.5 bg-red-600 absolute top-0 right-0 text-[10px] text-white">
                            {{ count($notification) }}</div>
                        @endif
                    </button>
                    <div
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-40 w-full bg-white rounded-md border border-gray-100">
                        <div class="flex items-center px-4 pt-4 border-b border-b-gray-100 notification-tab">
                            <button type="button" data-tab="notification" data-tab-page="notifications"
                                class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1 active">Notifications</button>
                        </div>
                        <div class="my-2">
                            <ul class="max-h-64 overflow-y-auto" data-tab-for="notification" data-page="notifications">
                                @if (count($pendings) > 0)
                                @foreach ($pendings as $pending)
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                Pengajuan baru!
                                            </div>
                                            <div class="text-[11px] text-gray-400">from {{ $pending->organization }}
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown ml-3">
                    <button type="button" class="dropdown-toggle flex items-center">
                        <h3 class="font-medium transition duration-300 text-base text-[#1F262F] hover:text-gray-500">{{
                            Auth::user()->first_name }}</h3>
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="/profile"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="/dashboard"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Dashboard</a>
                        </li>
                        <li>
                            <a href="/logout"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        @yield('content')
        @include('layouts.footer')
    </main>
    <!-- end: Main -->

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script>
        // start: Sidebar
        const sidebarToggle = document.querySelector('.sidebar-toggle')
        const sidebarOverlay = document.querySelector('.sidebar-overlay')
        const sidebarMenu = document.querySelector('.sidebar-menu')
        const main = document.querySelector('.main')
        const sidebarCloseBtn = document.querySelector('.sidebar-close');

        if (window.innerWidth < 768) {
            main.classList.toggle('active')
            sidebarOverlay.classList.toggle('hidden')
        }

        sidebarToggle.addEventListener('click', function (e) {
            e.preventDefault()
            main.classList.toggle('active')
            sidebarOverlay.classList.toggle('hidden')
            sidebarMenu.classList.toggle('-translate-x-full')
        })

        sidebarOverlay.addEventListener('click', function (e) {
            e.preventDefault()
            main.classList.add('active')
            sidebarOverlay.classList.add('hidden')
            sidebarMenu.classList.add('-translate-x-full')
        })

        sidebarCloseBtn.addEventListener('click', function () {
            sidebarMenu.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        });
        
        document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (item) {
            item.addEventListener('click', function (e) {
                e.preventDefault()
                const parent = item.closest('.group')
                if (parent.classList.contains('selected')) {
                    parent.classList.remove('selected')
                } else {
                    document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (i) {
                        i.closest('.group').classList.remove('selected')
                    })
                    parent.classList.add('selected')
                }
            })
        })
        // end: Sidebar

        document.addEventListener('DOMContentLoaded', function () {
            const greetingElement = document.getElementById('greeting');
            const currentHour = new Date().getHours();
            let greetingText;

            if (currentHour < 12) {
                greetingText = 'Selamat Pagi,';
            } else if (currentHour < 18) {
                greetingText = 'Selamat Siang,';
            } else {
                greetingText = 'Selamat Malam,';
            }

            greetingElement.textContent = greetingText;
        });



        // start: Popper
        const popperInstance = {}
        document.querySelectorAll('.dropdown').forEach(function (item, index) {
            const popperId = 'popper-' + index
            const toggle = item.querySelector('.dropdown-toggle')
            const menu = item.querySelector('.dropdown-menu')
            menu.dataset.popperId = popperId
            popperInstance[popperId] = Popper.createPopper(toggle, menu, {
                modifiers: [
                    {
                        name: 'offset',
                        options: {
                            offset: [0, 8],
                        },
                    },
                    {
                        name: 'preventOverflow',
                        options: {
                            padding: 24,
                        },
                    },
                ],
                placement: 'bottom-end'
            });
        })

        document.addEventListener('click', function (e) {
            const toggle = e.target.closest('.dropdown-toggle')
            const menu = e.target.closest('.dropdown-menu')
            if (toggle) {
                const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
                const popperId = menuEl.dataset.popperId
                if (menuEl.classList.contains('hidden')) {
                    hideDropdown()
                    menuEl.classList.remove('hidden')
                    showPopper(popperId)
                } else {
                    menuEl.classList.add('hidden')
                    hidePopper(popperId)
                }
            } else if (!menu) {
                hideDropdown()
            }
        })

        function hideDropdown() {
            document.querySelectorAll('.dropdown-menu').forEach(function (item) {
                item.classList.add('hidden')
            })
        }

        function showPopper(popperId) {
            popperInstance[popperId].setOptions(function (options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        { name: 'eventListeners', enabled: true },
                    ],
                }
            });
            popperInstance[popperId].update();
        }

        function hidePopper(popperId) {
            popperInstance[popperId].setOptions(function (options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        { name: 'eventListeners', enabled: false },
                    ],
                }
            });
        }
        // end: Popper



        // start: Tab
        document.querySelectorAll('[data-tab]').forEach(function (item) {
            item.addEventListener('click', function (e) {
                e.preventDefault()
                const tab = item.dataset.tab
                const page = item.dataset.tabPage
                const target = document.querySelector('[data-tab-for="' + tab + '"][data-page="' + page + '"]')
                document.querySelectorAll('[data-tab="' + tab + '"]').forEach(function (i) {
                    i.classList.remove('active')
                })
                document.querySelectorAll('[data-tab-for="' + tab + '"]').forEach(function (i) {
                    i.classList.add('hidden')
                })
                item.classList.add('active')
                target.classList.remove('hidden')
            })
        })
        // end: Tab
    </script>
</body>

</html>