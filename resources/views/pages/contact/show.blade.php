@extends('layouts.dashboard_template')

@section('content')

<div class="rounded-md border bg-white border-gray-100 m-6 px-0 sm:p-6 shadow-md shadow-black/5">

    @if (session()->has('status'))
    @include('components.status', ['status' => session('status')])
    @endif

    <div class="mx-auto min-h-[400px]">
        <div class="relative right-0 p-6">
            <ul class="w-2/3 mx-auto relative flex flex-wrap p-1 list-none rounded-xl bg-gray-200" data-tabs="tabs"
                role="list">
                <li class="z-30 flex-auto text-center">
                    <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                        data-tab-target="" active="" role="tab" aria-selected="true" aria-controls="pendings">
                        <span class="ml-1">Pendings</span>
                    </a>
                </li>
                <li class="z-30 flex-auto text-center">
                    <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                        data-tab-target="" role="tab" aria-selected="false" aria-controls="onprogress">
                        <span class="ml-1">On Progress</span>
                    </a>
                </li>
                <li class="z-30 flex-auto text-center">
                    <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                        data-tab-target="" role="tab" aria-selected="false" aria-controls="complete">
                        <span class="ml-1">Completed</span>
                    </a>
                </li>
                <li class="z-30 flex-auto text-center">
                    <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                        data-tab-target="" role="tab" aria-selected="false" aria-controls="cancel">
                        <span class="ml-1">Canceled</span>
                    </a>
                </li>
            </ul>
            <div data-tab-content="" class="p-5">
                <div class="block opacity-100" id="pendings" role="tabpanel">
                    @if ($pendings->isNotEmpty())
                    <table class="w-full min-w-[540px]" data-tab-for="order" data-page="active">
                        <thead>
                            <tr>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    No.</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    Event Name</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Organization</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Event Date</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Type</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Submitted at</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendings as $pending)
                            <tr class="hover:bg-slate-300">
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $loop->iteration }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50 hover:underline">
                                    <a href="{{ route('contact.edit', $pending->id) }}"
                                        class="text-gray-600 text-sm font-medium">{{
                                        $pending->event_name }}</a>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $pending->organization
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $pending->formatted_date
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $pending->type == 'Alat kesehatan' ? 'Alkes' : "Medis" }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{
                                        $pending->formatted_created_at
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span
                                        class="w-20 text-center p-1 rounded bg-yellow-500/10 text-yellow-500 font-medium text-[12px] leading-none">{{
                                        $pending->status }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-10">{{ $pendings->links('vendor.pagination.tailwind') }}</div>

                    @elseif ($pendings->isEmpty() && !$pendings->onFirstPage())
                    <div class="min-h-96 flex items-center justify-center">
                        <p class="text-xl text-center">Data "pending" on page {{ $pendings->currentPage() }} is empty.</p>
                    </div>

                    @else
                    <div class="min-h-96 flex items-center justify-center">
                        <p class="text-xl text-center">Data is empty</p>
                    </div>
                    @endif

                </div>
                <div class="hidden opacity-0" id="onprogress" role="tabpanel">
                    @if ($onprogresses->isNotEmpty())
                    <table class="w-full min-w-[540px]" data-tab-for="order" data-page="active">
                        <thead>
                            <tr>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    No.</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    Event Name</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Organization</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Event Date</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Type</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Submitted At</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($onprogresses as $onprogress)
                            <tr class="hover:bg-slate-300">
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $loop->iteration }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50 hover:underline">
                                    <a href="{{ route('contact.edit', $onprogress->id) }}"
                                        class="text-gray-600 text-sm font-medium">{{
                                        $onprogress->event_name }}</a>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $onprogress->organization
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $onprogress->formatted_date
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $onprogress->type }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{
                                        $onprogress->formatted_created_at
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span
                                        class="w-20 text-center p-1 rounded bg-blue-500/10 text-blue-500 font-medium text-[12px] leading-none">{{
                                        $onprogress->status }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-10">{{ $onprogresses->links('vendor.pagination.tailwind') }}</div>

                    @elseif ($onprogresses->isEmpty() && !$onprogresses->onFirstPage())
                    <div class="min-h-96 flex items-center justify-center">
                        <p class="text-xl text-center">Data "on progress" on page {{ $pendings->currentPage() }} is empty.
                        </p>
                    </div>

                    @else
                    <div class="min-h-96 flex items-center justify-center">
                        <p class="text-xl text-center">Data is empty</p>
                    </div>
                    @endif

                </div>
                <div class="hidden opacity-0" id="complete" role="tabpanel">
                    @if ($completeds->isNotEmpty())
                    <table class="w-full min-w-[540px]" data-tab-for="order" data-page="active">
                        <thead>
                            <tr>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    No.</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    Event Name</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Organization</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Event Date</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Type</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Submitted At</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($completeds as $completed)
                            <tr class="hover:bg-slate-300">
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $loop->iteration }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50 hover:underline">
                                    <a href="{{ route('contact.edit', $completed->id) }}"
                                        class="text-gray-600 text-sm font-medium">{{
                                        $completed->event_name }}</a>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $completed->organization
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $completed->formatted_date
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $completed->type }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{
                                        $completed->formatted_created_at
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span
                                        class="w-20 text-center p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">{{
                                        $completed->status }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-10">{{ $completeds->links('vendor.pagination.tailwind') }}</div>

                    @elseif ($completeds->isEmpty() && !$completeds->onFirstPage())
                    <div class="min-h-96 flex items-center justify-center">
                        <p class="text-xl text-center">Data "completed" on page {{ $pendings->currentPage() }} is empty.
                        </p>
                    </div>

                    @else
                    <div class="min-h-96 flex items-center justify-center">
                        <p class="text-xl text-center">Data is empty</p>
                    </div>
                    @endif

                </div>
                <div class="hidden opacity-0" id="cancel" role="tabpanel">
                    @if ($canceleds->isNotEmpty())
                    <table class="w-full min-w-[540px]" data-tab-for="order" data-page="active">
                        <thead>
                            <tr>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    No.</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    Event Name</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Organization</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Event Date</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Type</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Submitted At</th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($canceleds as $canceled)
                            <tr class="hover:bg-slate-300">
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $loop->iteration }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50 hover:underline">
                                    <a href="{{ route('contact.edit', $canceled->id) }}"
                                        class="text-gray-600 text-sm font-medium">{{ $canceled->event_name }}</a>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $canceled->organization
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $canceled->formatted_date
                                        }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{ $canceled->type }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span class="text-[13px] font-medium text-gray-400">{{
                                        $canceled->formatted_created_at }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span
                                        class="w-20 text-center p-1 rounded bg-red-500/10 text-red-500 font-medium text-[12px] leading-none">{{
                                        $canceled->status }}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-10">{{ $canceleds->links('vendor.pagination.tailwind') }}</div>

                    @elseif ($canceleds->isEmpty() && !$canceleds->onFirstPage())
                    <div class="min-h-96 flex items-center justify-center">
                        <p class="text-xl text-center">Data "canceled" on page {{ $pendings->currentPage() }} is empty.
                        </p>
                    </div>

                    @else
                    <div class="min-h-96 flex items-center justify-center">
                        <p class="text-xl text-center">Data is empty</p>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection