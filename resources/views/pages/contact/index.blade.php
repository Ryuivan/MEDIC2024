@extends('layouts.app')

@section('content')

<div class="bg-[#739058] px-5 py-10">
    <div class="w-full max-w-3xl mx-auto">

        @if (session()->has('success'))
        <div class="flex items-center p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-[#ebf5ff]" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 lg:w-5 lg:h-5 me-3" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="text-sm lg:text-base">
                <p class="font-medium"><span class="font-semibold">Info!<br></span>{{ session()->get('success') }}</p>
            </div>
        </div>
        @endif

        <h1 class="text-xl lg:text-2xl font-bold text-white mb-3">Pengajuan Jasa<br>Alat Kesehatan dan Medis</h1>
        <h3 class="text-lg lg:text-xl font-semibold text-white">Catatan:</h3>
        <ol class="list-decimal list-inside text-justify">
            <li class="text-white mb-1 text-sm lg:text-base">Pengajuan jasa harus diajukan minimal H-7 sebelum acara
                berlangsung.
            </li>
            <li class="text-white mb-1 text-sm lg:text-base">Anggota Medic wajib mendapatkan konsumsi yang layak apabila
                pengaju
                membutuhkan jasa
                medis selama 3 jam atau
                lebih. Jumlah konsumsi disesuai kan dengan jumlah tenaga medis yang diajukan.</li>
            <li class="text-white mb-1 text-sm lg:text-base">Pengaju wajib datang ke UKK apabila sudah dihubungi oleh
                pihak UMN
                Medical Center,
                untuk menandatangani form
                pengajuan.</li>
            <li class="text-white text-sm lg:text-base">Anggota Medic wajib diperlakukan dengan baik sesuai aturan serta
                norma yang
                berlaku.
                Jika ditemukan perlakukan
                tidak baik terhadap anggota Medic, maka Medic berhak memberikan sanksi yang terberat adalah dengan
                menarik anggota
                dari pengajuan jasa dan blacklist acara.</li>
        </ol>
        <p class="text-white text-sm lg:text-base mt-3">Selebihnya, tercantum dalam
            <a href="https://bit.ly/SOPUMNMedicalCenter" class="font-bold underline hover:no-underline">SOP Eksternal
                UMN Medical Center</a>.
        </p>
        <hr class="my-5">
        <ul class="text-white text-sm lg:text-base mb-5">
            <li><a href="https://line.me/R/ti/p/@617rpkkn" target="_blank" class="underline hover:no-underline">Line
                    Official Account</a></li>
            <li><a href="mailto:umnmedicalcenter@umn.ac.id" target="_blank"
                    class="underline hover:no-underline">Email</a></li>
            <li><a href="https://www.instagram.com/umnmedicalcenter/" target="_blank"
                    class="underline hover:no-underline">Instagram</a></li>
        </ul>
        <a href="{{ route('contact.create') }}" class="px-5 flex justify-center items-center">
            <button
                class="bg-white w-full sm:max-w-[200px] py-2 rounded font-semibold text-sm text-black lg:text-base">Form
                Pengajuan</button>
        </a>
    </div>
</div>

@endsection