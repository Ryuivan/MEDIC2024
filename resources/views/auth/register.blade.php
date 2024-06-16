@extends('layouts.app')

@section('content')

<div class="min-h-[826px] flex items-center background-login px-10 sm:px-20 md:px-32">
    <form method="POST" action="{{ route('register') }}" class="w-full lg:w-1/2 xxl:w-1/3">
        @csrf
        <div class="mb-4 text-center lg:text-left">
            <h1 class="text-[60px] font-medium text-white">Create<br>Your Account</h1>
        </div>

        {{-- Name --}}
        <div class="mb-8">
            <div class="flex justify-center space-x-4">
                <div class="relative z-0 w-full group text-white">
                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}"
                        class="block py-3 w-full text-sm text-white bg-[#9baa89] md:bg-[#576859] border-2 px-4 border-[#9baa89] md:border-[#576859] appearance-none focus:outline-none focus:ring-0 focus:border-white opacity-90 peer rounded-lg"
                        placeholder=" " />
                    <label for="first_name"
                        class="z-10 peer-focus:font-medium absolute text-md text-[#435c3c] md:text-gray-300 duration-300 transform -translate-y-8 scale-75 top-3 origin-[0] peer-focus:translate-x-0 peer-focus:start-0 rtl:peer-focus:-translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-x-4 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">First
                        Name</label>
                </div>
                <div class="relative z-0 w-full group text-white">
                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}"
                        class="block py-3 w-full text-sm text-white bg-[#9baa89] md:bg-[#576859] border-2 px-4 border-[#9baa89] md:border-[#576859] appearance-none focus:outline-none focus:ring-0 focus:border-white opacity-90 peer rounded-lg"
                        placeholder=" " />
                    <label for="last_name"
                        class="z-10 peer-focus:font-medium absolute text-md text-[#435c3c] md:text-gray-300 duration-300 transform -translate-y-8 scale-75 top-3 origin-[0] peer-focus:translate-x-0 peer-focus:start-0 rtl:peer-focus:-translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-x-4 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Last
                        Name</label>
                </div>
            </div>
            @error('first_name') <span class=" text-xs text-red-500">{{ $message }}</span> @enderror
            @error('last_name') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Email Address -->
        <div class="relative z-0 w-full mb-8 group text-white">
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="block py-3 w-full text-sm text-white bg-[#9baa89] md:bg-[#576859] border-2 px-4 border-[#9baa89] md:border-[#576859] appearance-none focus:outline-none focus:ring-0 focus:border-white opacity-90 peer rounded-lg"
                placeholder=" " />
            <label for="email"
                class="z-10 peer-focus:font-medium absolute text-md text-[#435c3c] md:text-gray-300 duration-300 transform -translate-y-8 scale-75 top-3 origin-[0] peer-focus:translate-x-0 peer-focus:start-0 rtl:peer-focus:-translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-x-4 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">E-mail</label>
            @error('email') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Password -->
        <div class="relative z-0 w-full mb-8 group text-white">
            <input type="password" name="password" id="password"
                class="block py-3 w-full text-sm text-white bg-[#9baa89] md:bg-[#576859] border-2 px-4 border-[#9baa89] md:border-[#576859] appearance-none focus:outline-none focus:ring-0 focus:border-white md:opacity-90 peer rounded-lg"
                placeholder=" " />
            <label for="password"
                class="z-10 peer-focus:font-medium absolute text-md text-[#435c3c] md:text-gray-300 duration-300 transform -translate-y-8 scale-75 top-3 origin-[0] peer-focus:translate-x-0 peer-focus:start-0 rtl:peer-focus:-translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-x-4 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Password</label>
            @error('password') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="relative z-0 w-full mb-8 group text-white">
            <input type="password" name="password_confirmation" id="password_confirmation"
                class="block py-3 w-full text-sm text-white bg-[#9baa89] md:bg-[#576859] border-2 px-4 border-[#9baa89] md:border-[#576859] appearance-none focus:outline-none focus:ring-0 focus:border-white md:opacity-90 peer rounded-lg"
                placeholder=" " />
            <label for="password_confirmation"
                class="z-10 peer-focus:font-medium absolute text-md text-[#435c3c] md:text-gray-300 duration-300 transform -translate-y-8 scale-75 top-3 origin-[0] peer-focus:translate-x-0 peer-focus:start-0 rtl:peer-focus:-translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-x-4 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Confirm
                Password</label>
            @error('password_confirmation') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-center lg:justify-end mt-4">
            <button type="submit" class="bg-[#849274] px-8 py-3 rounded-lg text-white">Create</button>
        </div>
    </form>
</div>

@endsection