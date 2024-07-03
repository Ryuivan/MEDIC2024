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
                class="flex items-center py-2 px-4 hover:bg-gray-400 hover:text-gray-100 rounded-md {{ Route::currentRouteName() == 'dashboard' ? 'bg-gray-300 text-black' : 'text-gray-300'}}">
                <span class="text-sm">Dashboard</span>
            </a>
        </li>

        <li class="mb-1 group">
            <a href="{{ route('contact.show') }}"
                class="flex items-center py-2 px-4 hover:bg-gray-400 hover:text-gray-100 rounded-md {{ Route::currentRouteName() == 'contact.show' ? 'bg-gray-300 text-black' : 'text-gray-300'}}">
                <span class="text-sm">Services</span>
            </a>
        </li>

        <li class="mb-1 group">
            <a href="{{ route('category.index') }}"
                class="flex items-center py-2 px-4 hover:bg-gray-400 hover:text-gray-100 rounded-md {{ Route::currentRouteName() == 'category.index' ? 'bg-gray-300 text-black' : 'text-gray-300'}}">
                <span class="text-sm">Categories</span>
            </a>
        </li>

        <li class="mb-1 group">
            <a href="{{ route('gallery.index') }}"
                class="flex items-center py-2 px-4 hover:bg-gray-400 hover:text-gray-100 rounded-md {{ Route::currentRouteName() == 'profile.index' ? 'bg-gray-300 text-black' : 'text-gray-300'}}">
                <span class="text-sm">Galleries</span>
            </a>
        </li>

        @if (Auth::user()->is_admin == 1)
        <li class="mb-1 group">
            <a href="{{ route('profile.index') }}"
                class="flex items-center py-2 px-4 hover:bg-gray-400 hover:text-gray-100 rounded-md {{ Route::currentRouteName() == 'profile.index' ? 'bg-gray-300 text-black' : 'text-gray-300'}}">
                <span class="text-sm">Accounts</span>
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