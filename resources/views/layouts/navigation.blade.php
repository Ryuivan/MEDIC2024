<nav class="px-4 lg:px-16 py-4 flex justify-between items-center bg-[#D5DECD]">
    <a class="leading-none" href="/">
        <img src="{{ asset('assets/logo/logo.png') }}" alt="Logo Medic" class="h-12 w-auto">
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-[#9BAA89] p-3">
            <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-4">
        <li><a class="font-medium transition duration-300 text-md text-[#1F262F] hover:text-gray-500 {{ $title === 'Home' ? 'font-semibold' : '' }}"
                href="/">Home</a></li>
        <li class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" viewBox="0 0 24 32" fill="none"
                stroke="#1F262F" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="current-fill">
                <line x1="12" y1="6" x2="12" y2="26"></line>
            </svg>
        </li>
        <li><a class="font-medium transition duration-300 text-md text-[#1F262F] hover:text-gray-500 {{ $title === 'About' ? 'font-semibold' : '' }}"
                href="/about">About</a></li>
        <li class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" viewBox="0 0 24 32" fill="none"
                stroke="#1F262F" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="current-fill">
                <line x1="12" y1="6" x2="12" y2="26"></line>
            </svg>
        </li>
        <li><a class="font-medium transition duration-300 text-md text-[#1F262F] hover:text-gray-500 {{ $title === 'Proker' ? 'font-semibold' : '' }}"
                href="/proker">Proker</a></li>
        <li class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" viewBox="0 0 24 32" fill="none"
                stroke="#1F262F" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="current-fill">
                <line x1="12" y1="6" x2="12" y2="26"></line>
            </svg>
        </li>
        <li><a class="font-medium transition duration-300 text-md text-[#1F262F] hover:text-gray-500 {{ $title === 'Contact' ? 'font-semibold' : '' }}"
                href="/contact">Contact</a></li>
        <li class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" viewBox="0 0 24 32" fill="none"
                stroke="#1F262F" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="current-fill">
                <line x1="12" y1="6" x2="12" y2="26"></line>
            </svg>
        </li>
        <li><a class="font-medium transition duration-300 text-md text-[#1F262F] hover:text-gray-500 {{ $title === 'Gallery' ? 'font-semibold' : '' }}"
                href="/gallery">Gallery</a></li>
    </ul>
    {{-- <a
        class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200"
        href="#">Sign In</a>
    <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200"
        href="#">Sign up</a> --}}
</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <img src="{{ asset('assets/logo/logo.png') }}" alt="Logo Medic" class="h-12 w-auto">
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-[#9BAA89] cursor-pointer hover:text-gray-500"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-medium text-[#1F262F] hover:bg-gray-50 hover:text-gray-600 rounded {{ $title === 'Home' ? 'font-semibold' : '' }}"
                        href="/">Home</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-medium text-[#1F262F] hover:bg-gray-50 hover:text-gray-600 rounded {{ $title === 'About' ? 'font-semibold' : '' }}"
                        href="/about">About</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-medium text-[#1F262F] hover:bg-gray-50 hover:text-gray-600 rounded {{ $title === 'Proker' ? 'font-semibold' : '' }}"
                        href="/proker">Proker</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-medium text-[#1F262F] hover:bg-gray-50 hover:text-gray-600 rounded {{ $title === 'Contact' ? 'font-semibold' : '' }}"
                        href="/contact">Contact</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-medium text-[#1F262F] hover:bg-gray-50 hover:text-gray-600 rounded {{ $title === 'Gallery' ? 'font-semibold' : '' }}"
                        href="/gallery">Gallery</a>
                </li>
            </ul>
        </div>
        {{-- <div class="mt-auto">
            <div class="pt-6">
                <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold bg-gray-50 hover:bg-gray-100 rounded-xl"
                    href="#">Sign in</a>
                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl"
                    href="#">Sign Up</a>
            </div>
        </div> --}}
    </nav>
</div>

<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>