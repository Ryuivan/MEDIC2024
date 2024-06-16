@extends('layouts.dashboard_template')

@section('content')

<div class="bg-white rounded-md border border-gray-100 py-6 px-0 sm:p-6 shadow-md shadow-black/5">
    <form method="POST" action="{{ route('contact.update', $contact->id) }}"
        class="bg-white w-full rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
        @csrf
        @method('PUT')

        <h1 class="text-xl md:text-2xl font-semibold">{{ $contact->event_name }}</h1>
        <div class="my-5">
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Nama Pengaju</p>
                <p>: {{ $contact->name }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">NIM</p>
                <p>: {{ $contact->nim }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Tipe Pengajuan</p>
                <p>: {{ $contact->type }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">No. HP</p>
                <p>: {{ $contact->phone }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">ID LINE</p>
                <p>: {{ $contact->line }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Nama Organisasi</p>
                <p>: {{ $contact->organization }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Jabatan</p>
                <p>: {{ $contact->title }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Deskripsi</p>
                <p>: {{ $contact->description }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Lokasi</p>
                <p>: {{ $contact->location }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Jumlah Tenaga</p>
                <p>: {{ $contact->person }} Orang</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Tanggal</p>
                <p>: {{ $contact->formatted_date }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Waktu Mulai</p>
                <p>: {{ $contact->start_time }}</p>
            </div>
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Waktu Selesai</p>
                <p>: {{ $contact->end_time }}</p>
            </div>
            @if (!is_null($contact->note))
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Catatan</p>
                <p>: {{ $contact->note }}</p>
            </div>
            @endif
            <div class="flex my-1">
                <p class="min-w-40 font-medium">Tanggal Pengajuan</p>
                <p>: {{ $contact->formatted_created_at }}</p>
            </div>

            <div class="flex my-5">
                <label for="status" class="min-w-40 font-medium">Status</label>
                <select id="status" name="status"
                    class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block py-1.5 px-2.5">
                    <option value="Pending" @if ($contact->status == 'Pending') selected @endif>Pending</option>
                    <option value="On Progress" @if ($contact->status == 'On Progress') selected @endif>On Progress
                    </option>
                    <option value="Completed" @if ($contact->status == 'Completed') selected @endif>Completed</option>
                    <option value="Canceled" @if ($contact->status == 'Canceled') selected @endif>Canceled</option>
                </select>
            </div>
        </div>
        <div class="flex justify-end">
            <button type="submit"
                class="bg-blue-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-600">Update</button>
        </div>
    </form>
</div>

@endsection