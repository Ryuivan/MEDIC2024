@extends('layouts.app')

@section('content')

<div class="p-0 m-0 bg-[#253A35] bg-cover">
  <div class="text-slate-50 m-0 p-4 w-full h-full">
    <div class="flex flex-wrap mb-4 items-center justify-between">
      <div class="w-full">
        <div class="flex justify-center mb-12">
          <div class="px-4 py-6">
            <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold text-slate-50">Logo dan filosofi</h2>
          </div>
        </div>
      </div>
      <div class="md:flex md:flex-wrap md:-mx-4">
        <div class="w-full md:w-1/2 md:px-4">
          <div class="flex items-center my-10 mx-8">
            <div class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 xl:w-40 xl:h-40 mb-4 md:mb-0 flex-shrink-0 rounded-full p-6 mr-6 md:p-8 flex items-center justify-center bg-slate-50">
              <img src="{{ asset('assets/about/logo.png') }}" class="w-full h-auto object-cover">
            </div>
            <div class="w-full">
              <h2 class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold mb-2 text-[#91FDFE]">
                Sisi Terbuka pada Pertemuan Tanda Plus
              </h2>
              <p class="text-sm md:text-base lg:text-lg xl:text-xl">
                Melambangkan keterbukaan UMN Medical Center kepada siapapun.
              </p>
            </div>
          </div>
          <div class="flex items-center my-10 mx-8">
            <div class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 xl:w-40 xl:h-40 mb-4 md:mb-0 flex-shrink-0 rounded-full p-6 mr-6 md:p-8 flex items-center justify-center bg-slate-50">
              <img src="{{ asset('assets/about/logo1.png') }}" class="w-full h-auto object-cover">
            </div>
            <div class="w-full">
              <h2 class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold mb-2 text-[#91FDFE]">Warna Hijau</h2>
              <p class="text-sm md:text-base lg:text-lg xl:text-xl">Melambangkan kesegaran dari keharmonisan.</p>
            </div>
          </div>
          <div class="flex items-center my-10 mx-8">
            <div class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 xl:w-40 xl:h-40 mb-4 md:mb-0 flex-shrink-0 rounded-full p-6 mr-6 md:p-8 flex items-center justify-center bg-slate-50">
              <img src="{{ asset('assets/about/logo2.png') }}" class="w-full h-auto object-cover">
            </div>
            <div class="w-5/6">
              <h2 class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold mb-2 text-[#91FDFE]">
                Bagian Melengkung pada Ujung Tanda Plus
              </h2>
              <p class="text-sm md:text-base lg:text-lg xl:text-xl">Melambangkan fleksibilitas.</p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 md:px-4">
          <div class="flex items-center my-10 mx-8">
            <div class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 xl:w-40 xl:h-40 mb-4 md:mb-0 flex-shrink-0 rounded-full p-6 mr-6 md:p-8 flex items-center justify-center bg-slate-50">
              <img src="{{ asset('assets/about/logo3.png') }}" class="w-16 h-auto object-cover">
            </div>
            <div class="w-5/6">
              <h2 class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold mb-2 text-[#91FDFE]">
                Logo Universitas Multimedia Nusantara
              </h2>
              <p class="text-sm md:text-base lg:text-lg xl:text-xl">
                Melambangkan UMN Medical Center merupakan bagian dari
                Universitas Multimedia Nusantara.
              </p>
            </div>
          </div>
          <div class="flex items-center my-10 mx-8">
            <div class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 xl:w-40 xl:h-40 mb-4 md:mb-0 flex-shrink-0 rounded-full p-6 mr-6 md:p-8 flex items-center justify-center bg-slate-50">
              <img src="{{ asset('assets/about/logo4.png') }}" class="w-24 h-auto object-cover">
            </div>
            <div class="w-5/6">
              <h2 class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold mb-2 text-[#91FDFE]">Tanda Plus Hijau</h2>
              <p class="text-sm md:text-base lg:text-lg xl:text-xl">
                Melambangkan 4 fakultas yang ada di Universitas Multimedia
                Nusantara yang berarti kerjasama dan solidaritas antar anggota.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="/aboutReadMore" class="text-xl text-slate-50"><button>read more</button></a>
</div>

@endsection