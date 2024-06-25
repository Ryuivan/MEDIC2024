@extends('layouts.dashboard_template')

@section('content')

<div class="rounded-md border bg-white border-gray-100 m-6 px-0 sm:p-6 shadow-md shadow-black/5">

    @if (session()->has('status'))
    <div class="mx-6">
        <div class="flex items-center p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-[#ebf5ff]"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 lg:w-5 lg:h-5 me-3" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <p class="text-sm font-medium">
                {{ session()->get('status') }}
            </p>
        </div>
    </div>
    @endif

    <div class="mx-auto">
        <div class="relative right-0 p-6">
            
            <div class="flex justify-end mb-5">
                <a href="{{ route('register') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Add
                    New</a>
            </div>

            <div class="block opacity-100 overflow-x-auto">
                @if ($accounts->isNotEmpty())
                <table class="w-full min-w-[540px]" data-tab-for="order" data-page="active">
                    <thead>
                        <tr>
                            <th
                                class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                ID</th>
                            <th
                                class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                Email</th>
                            <th
                                class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                First Name</th>
                            <th
                                class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                Last Name</th>
                            <th
                                class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                Role</th>
                            <th
                                class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                Created at</th>
                            <th
                                class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                Updated at</th>
                            <th
                                class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accounts as $account)
                        <tr class="hover:bg-slate-300">
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">{{ $account->id }}</span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50 hover:underline">
                                <a href="/akun/{{ $account->id }}" class="text-gray-600 text-sm font-medium">{{
                                    $account->email }}</a>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">{{ $account->first_name
                                    }}</span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">{{ $account->last_name
                                    }}</span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">{{ $account->is_admin == 1 ? 'Admin'
                                    : 'User' }}</span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">{{
                                    $account->formatted_created_at
                                    }}</span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">{{
                                    $account->formatted_updated_at
                                    }}</span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <form action="{{ route('profile.destroy_admin', $account->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 text-sm font-medium">Delete</button>
                                </form>
                        </tr>
                        @endforeach
                    </tbody>    
                </table>
                <div class="mt-5">{{ $accounts->links('vendor.pagination.tailwind') }}</div>
                @endif

            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>

@endsection