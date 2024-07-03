@extends('layouts.dashboard_template')

@section('content')

<div class="bg-white rounded-md border border-gray-100 py-6 px-0 sm:p-6 shadow-md shadow-black/5">
    <div class="flex justify-between mb-6">
        <div class="bg-white w-full rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <h1 class="mb-5 text-center text-2xl"><span id="greeting"></span> <span class="font-semibold">{{
                    Auth::user()->first_name }} {{ Auth::user()->last_name ?? '' }}</span>!</h1>
            <p class="text-center text-lg text-gray-700">{!! $quote !!}</p>
        </div>
    </div>
    
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md min-h-[300px]">
        @if ($pengajuans->isEmpty())
        <p class="text-center py-4">No Submission</p>
        @else
        <div class="flex justify-end mb-4 items-start">
            <a href="{{ route('contact.show') }}" class="font-medium hover:underline">Manage Submissions <i class="ri-external-link-line"></i></a>
        </div>

        <div class="overflow-x-auto">
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
                    @foreach ($pengajuans as $pengajuan)
                    <tr class="hover:bg-slate-300">
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">{{ $loop->iteration }}</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50 hover:underline">
                            <a href="{{ route('contact.edit', $pengajuan->id) }}"
                                class="text-gray-600 text-sm font-medium">{{
                                $pengajuan->event_name }}</a>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">{{ $pengajuan->organization }}</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">{{ $pengajuan->formatted_date }}</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">{{ $pengajuan->type }}</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">{{ $pengajuan->formatted_created_at
                                }}</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            @if ($pengajuan->status === 'Completed')
                            <div
                                class="w-20 text-center p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">{{
                                $pengajuan->status }}
                            </div>
                            @elseif ($pengajuan->status === 'On Progress')
                            <div
                                class="w-20 text-center p-1 rounded bg-blue-500/10 text-blue-500 font-medium text-[12px] leading-none">{{
                                $pengajuan->status }}
                            </div>
                            @elseif ($pengajuan->status === 'Pending')
                            <div
                                class="w-20 text-center p-1 rounded bg-yellow-500/10 text-yellow-500 font-medium text-[12px] leading-none">{{
                                $pengajuan->status }}
                            </div>
                            @else
                            <div
                                class="w-20 text-center p-1 rounded bg-red-500/10 text-red-500 font-medium text-[12px] leading-none">{{
                                $pengajuan->status }}
                            </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>

@endsection