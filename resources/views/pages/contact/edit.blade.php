{{-- @extends('layouts.dashboard_template')

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
                class="bg-blue-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-600">Save</button>
        </div>
    </form>
</div>

@endsection --}}

@extends('layouts.dashboard_template')

@section('content')

<div class="min-h-[500px] bg-white rounded-md p-6 flex items-center">
    <form class="max-w-md w-full mx-auto" action="{{ route('contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <h1 class="my-8 text-3xl font-semibold">{{ $contact->event_name }}</h1>

        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="name" id="name"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->name }}" disabled />
            <label for="name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="number" name="nim" id="nim"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->nim }}" disabled />
            <label for="nim"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                NIM</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="text" name="type" id="type"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->type }}" disabled />
            <label for="type"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tipe</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="text" name="phone" id="phone"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->phone }}" disabled />
            <label for="phone"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No.
                Telp</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="text" name="line" id="line"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->line }}" disabled />
            <label for="line"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">LINE</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="text" name="organization" id="organization"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->organization }}" disabled />
            <label for="organization"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Organisasi</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="text" name="title" id="title"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->title }}" disabled />
            <label for="title"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jabatan</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="text" name="event_name" id="event_name"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->event_name }}" disabled />
            <label for="event_name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                Acara</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="text" name="description" id="description"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->description }}" disabled />
            <label for="description"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="text" name="" id="created_at"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->created_at }}" disabled />
            <label for="created_at"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Pengajuan</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="date" name="date" id="date"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->date }}" disabled />
            <label for="date"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
                Acara</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="time" name="start_time" id="start_time"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->start_time }}" disabled />
            <label for="start_time"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jam
                Mulai</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="time" name="end_time" id="end_time"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->end_time }}" disabled />
            <label for="end_time"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jam
                Selesai</label>
        </div>

        <div class="relative z-0 mb-5 w-full group">
            <input type="text" name="location" id="location"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->location }}" disabled />
            <label for="location"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Lokasi</label>
        </div>

        @if ($contact->type == 'Medis')
        <div class="relative z-0 mb-5 w-full group">
            <input type="number" name="person" id="person"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $contact->person }}" disabled />
            <label for="person"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah
                Orang</label>
        </div>
        @endif

        @if (!is_null($contact->note))
        <div class="relative z-0 mb-2 mt-7 w-full group">
            <textarea name="note" id="note" required disabled
                class="w-full text-sm block mt-2 text-gray-900 bg-transparent border-2 p-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">{{ $contact->note }}</textarea>
            <label for="note"
                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Catatan</label>
        </div>
        @endif

        <div class="relative z-0 w-full mb-5 group">
            <label for="status" class="text-[11px] text-gray-500 duration-300 min-w-40">Status</label>
            <select id="status" name="status"
                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block py-1.5 px-2.5">
                <option value="Pending" @if ($contact->status == 'Pending') selected @endif>Pending</option>
                <option value="On Progress" @if ($contact->status == 'On Progress') selected @endif>On Progress
                </option>
                <option value="Completed" @if ($contact->status == 'Completed') selected @endif>Completed</option>
                <option value="Canceled" @if ($contact->status == 'Canceled') selected @endif>Canceled</option>
            </select>
        </div>

        <div class="flex justify-center">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Save</button>
        </div>
    </form>
</div>

@endsection