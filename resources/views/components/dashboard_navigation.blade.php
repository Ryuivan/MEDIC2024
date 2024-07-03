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
            @elseif (Route::currentRouteName() == 'contact.show')
            Service

            @elseif (Route::currentRouteName() == 'contact.edit')
            <a href="{{ route('contact.show') }}" class="text-gray-400 hover:text-gray-600 font-medium">Service</a>
        <li class="text-gray-600 mr-2 font-medium">/</li>
        Edit

        @elseif (Route::currentRouteName() == 'category.index')
        Category

        @elseif (Route::currentRouteName() == 'category.edit')
        <a href="{{ route('category.index') }}" class="text-gray-400 hover:text-gray-600 font-medium">Category</a>
        <li class="text-gray-600 mr-2 font-medium">/</li>
        Edit

        @elseif (Route::currentRouteName() == 'profile.index')
        Account

        @elseif (Route::currentRouteName() == 'profile.edit_admin')
        <a href="{{ route('profile.index') }}" class="text-gray-400 hover:text-gray-600 font-medium">Account</a>
        <li class="text-gray-600 mr-2 font-medium">/</li>
        Edit

        @elseif (Route::currentRouteName() == 'kategori.edit')
        <a href="{{ route('category.index') }}" class="text-gray-400 hover:text-gray-600 font-medium">Category</a>
        <li class="text-gray-600 mr-2 font-medium">/</li>
        Edit

        @elseif (Route::currentRouteName() == 'gallery.index')
        Gallery

        @elseif (Route::currentRouteName() == 'gallery.create')
        <a href="{{ route('gallery.index') }}" class="text-gray-400 hover:text-gray-600 font-medium">Gallery</a>
        <li class="text-gray-600 mr-2 font-medium">/</li>
        Create

        @elseif (Route::currentRouteName() == 'gallery.edit')
        <a href="{{ route('gallery.index') }}" class="text-gray-400 hover:text-gray-600 font-medium">Gallery</a>
        <li class="text-gray-600 mr-2 font-medium">/</li>
        Edit

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
                                        New Request!
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
                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">
                        Logout
                    </a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>