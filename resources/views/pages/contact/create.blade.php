@extends('layouts.app')

@section('content')

<div class="bg-[#739058] px-5 py-10">
    <form action="{{ route('contact.store') }}" method="POST" class="w-full max-w-3xl mx-auto">
        @csrf
        <div class="text-left mb-10">
            <h1 class="text-xl lg:text-2xl font-bold text-white">Form Pengajuan Jasa<br>Alat Kesehatan dan Medis</h1>
        </div>

        {{-- Nama --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="name" class="text-sm lg:text-base font-bold text-white">Nama Lengkap</label>
            </div>
            <div class="sm:w-4/5">
                <input type="text" name="name" id="name"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('name') border-red-500 @enderror"
                    placeholder="" value="{{ old('name') }}">
                @error('name')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- NIM --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="nim" class="w-1/5 text-sm lg:text-base font-bold text-white">NIM</label>
            </div>
            <div class="sm:w-4/5">
                <input type="number" name="nim" id="nim"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('nim') border-red-500 @enderror"
                    placeholder="12345 (Tanpa 000)" value="{{ old('nim') }}">
                @error('nim')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Tipe pengajuan --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="type" class="w-1/5 text-sm lg:text-base font-bold text-white">Tipe Pengajuan</label>
            </div>
            <div class="sm:w-4/5 flex gap-4">
                <label
                    class="@error('type') border-red-500 @enderror flex justify-between items-center w-1/2 p-2 border text-sm lg:text-base bg-white has-[:checked]:bg-[#425C3F] has-[:checked]:text-white">
                    Alat kesehatan
                    <input type="radio" name="type" value="Alat kesehatan" {{ old('type')==='Alat kesehatan' ? 'checked'
                        : '' }}>
                </label>

                <label
                    class="@error('type') border-red-500 @enderror flex justify-between items-center w-1/2 p-2 border text-sm lg:text-base bg-white has-[:checked]:bg-[#425C3F] has-[:checked]:text-white">
                    Medis
                    <input type="radio" name="type" value="Medis" {{ old('type')==='Medis' ? 'checked' : '' }}>
                </label>
            </div>
        </div>

        {{-- Phone --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="phone" class="w-1/5 text-sm lg:text-base font-bold text-white">No. telp</label>
            </div>
            <div class="sm:w-4/5">
                <input type="text" name="phone" id="phone"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('phone') border-red-500 @enderror"
                    placeholder="0812345678" value="{{ old('phone') }}">
                @error('phone')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- ID LINE --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="line" class="w-1/5 text-sm lg:text-base font-bold text-white">ID Line</label>
            </div>
            <div class="sm:w-4/5">
                <input type="text" name="line" id="line"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('line') border-red-500 @enderror"
                    placeholder="" value="{{ old('line') }}">
                @error('line')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Organization --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="organization" class="w-1/5 text-sm lg:text-base font-bold text-white">Nama
                    Organisasi</label>
            </div>
            <div class="sm:w-4/5">
                <input type="text" name="organization" id="organization"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('organization') border-red-500 @enderror"
                    placeholder="" value="{{ old('organization') }}">
                @error('organization')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Title --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="title" class="w-1/5 text-sm lg:text-base font-bold text-white">Jabatan</label>
            </div>
            <div class="sm:w-4/5">
                <input type="text" name="title" id="title"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('title') border-red-500 @enderror"
                    placeholder="" value="{{ old('title') }}">
                @error('title')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Nama Acara --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="event_name" class="w-1/5 text-sm lg:text-base font-bold text-white">Nama Acara</label>
            </div>
            <div class="sm:w-4/5">
                <input type="text" name="event_name" id="event_name"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('event_name') border-red-500 @enderror"
                    placeholder="" value="{{ old('event_name') }}">
                @error('event_name')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Description --}}
        <div class="sm:flex justify-between gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="description" class="w-1/5 text-sm lg:text-base font-bold text-white">Deskripsi Acara</label>
            </div>
            <div class="sm:w-4/5">
                <textarea name="description" id="description"
                    class="w-full h-20 p-2 border placeholder:text-sm placeholder:italic @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Tanggal Acara --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="day" class="w-1/5 text-sm lg:text-base font-bold text-white">Tanggal Acara</label>
            </div>
            <div class="sm:w-4/5">
                <input type="date" name="day" id="day"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('day') border-red-500 @enderror placeholder:text-[#acb3bc]"
                    placeholder="" min="{{ \Carbon\Carbon::now()->addDays(7)->format('Y-m-d') }}"
                    value="{{ old('day') }}">
                @error('day')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Start Time --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="start_time" class="w-1/5 text-sm lg:text-base font-bold text-white">Waktu Mulai</label>
            </div>
            <div class="sm:w-4/5">
                <input type="time" name="start_time" id="start_time"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('start_time') border-red-500 @enderror"
                    placeholder="" value="{{ old('start_time') }}">
                @error('start_time')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- End Time --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="end_time" class="w-1/5 text-sm lg:text-base font-bold text-white">Waktu Selesai</label>
            </div>
            <div class="sm:w-4/5">
                <input type="time" name="end_time" id="end_time"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('end_time') border-red-500 @enderror"
                    placeholder="" value="{{ old('end_time') }}">
                @error('end_time')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Location --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="location" class="w-1/5 text-sm lg:text-base font-bold text-white">Lokasi Acara</label>
            </div>
            <div class="sm:w-4/5">
                <input type="text" name="location" id="location"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('location') border-red-500 @enderror"
                    placeholder="" value="{{ old('location') }}">
                @error('location')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Person --}}
        <div class="sm:flex justify-between items-center gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="person" class="w-1/5 text-sm lg:text-base font-bold text-white">Jumlah Tim Medis</label>
            </div>
            <div class="sm:w-4/5">
                <input type="number" name="person" id="person"
                    class="w-full p-2 border placeholder:text-sm placeholder:italic @error('person') border-red-500 @enderror"
                    placeholder="Isi 0 jika meminjam alat kesehatan" value="{{ old('person') }}">
                @error('person')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Note --}}
        <div class="sm:flex justify-between gap-4 px-5 mb-6">
            <div class="sm:w-1/5 mb-1 sm:mb-0">
                <label for="note" class="w-1/5 text-sm lg:text-base font-bold text-white">Keterangan</label>
            </div>
            <div class="sm:w-4/5">
                <textarea name="note" id="note" class="w-full h-20 p-2 border placeholder:text-sm placeholder:italic"
                    placeholder="Bisa berupa obat apa saja yang dibutuhkan atau tambahan lainnya (opsional)">{{ old('note') }}</textarea>
                @error('note')
                <p class="text-red-500 text-xs mt-1">Pertanyaan ini perlu diisi dengan benar!</p>
                @enderror
            </div>
        </div>

        {{-- Submit --}}
        <div class="flex justify-center items-center px-5">
            <button type="submit"
                class="bg-white w-full sm:max-w-[200px] py-2 rounded font-semibold text-sm text-black lg:text-base">Submit</button>
        </div>
    </form>
</div>

@endsection