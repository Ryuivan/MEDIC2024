@extends('layouts.app')

@section('content')

<div class="bg-[#253A35]">
  <div class="py-16">
    <div class="min-w-screen h-3 bg-[#9BAA89] flex justify-center items-center">
      <h1 class="text-3xl font-bold text-white bg-[#253A35] text-center inline-block px-3">About</h1>
    </div>
  </div>
</div>

<div class="px-6 py-5 sm:px-12 bg-[#253A35] bg-cover">

  <div class="bg-[#253A35] px-5">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="mx-auto md:ml-auto md:mr-auto mb-8">
        <img src="{{ asset('assets/foto/home.jpg') }}" class="object-cover w-full" />
      </div>
      <div class="mx-auto md:ml-auto md:mr-auto mb-8">
        <img src="{{ asset('assets/foto/bphkoor.jpg') }}" class="object-cover w-full" />
      </div>
      <div class="mx-auto md:ml-auto md:mr-auto mb-8">
        <img src="{{ asset('assets/foto/home_x.jpg') }}" class="object-cover w-full" />
      </div>
    </div>
    <div class="flex w-full text-center md:text-justify justify-center">
      <p class="md:w-5/6 text-slate-50 text-sm lg:text-base xl:text-lg">UMN Medical Center berorientasi pada pelayanan
        kesehatan dengan kewajiban untuk memberikan pertolongan pertama, obat-obatan, serta edukasi kepada seluruh
        civitas akademika Universitas Multimedia Nusantara melalui kampanye-kampanye interaktif dan seminar mengenai
        kesehatan. Selain memiliki kegiatan yang interaktif, UMN Medical Center juga belajar mengenai solidaritas dan
        kekeluargaan yang disertai dengan pengimplementasian nilai 5C, baik di dalam maupun di luar kampus.</p>
    </div>
  </div>
</div>

  <div class="bg-[#253A35]">
    <div class="py-16">
      <div class="min-w-screen h-3 bg-[#9BAA89] flex justify-center items-center">
        <h1 class="text-3xl font-bold text-white bg-[#253A35] text-center inline-block px-3">Filosofi Logo</h1>
      </div>
    </div>
  </div>

  <div class="text-slate-50 m-0 px-6 sm:px-10 lg:px-16 w-full h-full bg-[#253A35]">
    <div class="flex flex-wrap items-center justify-between">

      <div class="lg:flex lg:flex-wrap lg:-mx-4">
        <div class="w-full lg:w-1/2 lg:px-4">
          <div class="flex items-center my-10 mx-8">
            <div
              class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 xl:w-40 xl:h-40 mb-4 md:mb-0 flex-shrink-0 rounded-full p-6 mr-6 md:p-8 flex items-center justify-center bg-slate-50">
              <img src="{{ asset('assets/about/logo.png') }}" class="w-full h-auto object-cover">
            </div>
            <div class="w-full">
              <h2 class="text-base lg:text-lg xl:text-xl font-bold mb-2 text-[#91FDFE]">
                Sisi Terbuka pada Pertemuan Tanda Plus
              </h2>
              <p class="text-sm lg:text-base xl:text-lg">
                Melambangkan keterbukaan UMN Medical Center kepada siapapun.
              </p>
            </div>
          </div>
          <div class="flex items-center my-10 mx-8">
            <div
              class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 xl:w-40 xl:h-40 mb-4 md:mb-0 flex-shrink-0 rounded-full p-6 mr-6 md:p-8 flex items-center justify-center bg-slate-50">
              <img src="{{ asset('assets/about/logo1.png') }}" class="w-full h-auto object-cover">
            </div>
            <div class="w-full">
              <h2 class="text-base lg:text-lg xl:text-xl font-bold mb-2 text-[#91FDFE]">Warna Hijau</h2>
              <p class="text-sm lg:text-base xl:text-lg">Melambangkan kesegaran dari keharmonisan.</p>
            </div>
          </div>
          <div class="flex items-center my-10 mx-8">
            <div
              class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 xl:w-40 xl:h-40 mb-4 md:mb-0 flex-shrink-0 rounded-full p-6 mr-6 md:p-8 flex items-center justify-center bg-slate-50">
              <img src="{{ asset('assets/about/logo2.png') }}" class="w-full h-auto object-cover">
            </div>
            <div class="w-5/6">
              <h2 class="text-base lg:text-lg xl:text-xl font-bold mb-2 text-[#91FDFE]">
                Bagian Melengkung pada Ujung Tanda Plus
              </h2>
              <p class="text-sm lg:text-base xl:text-lg">Melambangkan fleksibilitas.</p>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 lg:px-4">
          <div class="flex items-center my-10 mx-8">
            <div
              class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 xl:w-40 xl:h-40 mb-4 md:mb-0 flex-shrink-0 rounded-full p-6 mr-6 md:p-8 flex items-center justify-center bg-slate-50">
              <img src="{{ asset('assets/about/logo3.png') }}" class="w-16 h-auto object-cover">
            </div>
            <div class="w-5/6">
              <h2 class="text-base lg:text-lg xl:text-xl font-bold mb-2 text-[#91FDFE]">
                Logo Universitas Multimedia Nusantara
              </h2>
              <p class="text-sm lg:text-base xl:text-lg">
                Melambangkan UMN Medical Center merupakan bagian dari
                Universitas Multimedia Nusantara.
              </p>
            </div>
          </div>
          <div class="flex items-center my-10 mx-8">
            <div
              class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 xl:w-40 xl:h-40 mb-4 md:mb-0 flex-shrink-0 rounded-full p-6 mr-6 md:p-8 flex items-center justify-center bg-slate-50">
              <img src="{{ asset('assets/about/logo4.png') }}" class="w-24 h-auto object-cover">
            </div>
            <div class="w-5/6">
              <h2 class="text-base lg:text-lg xl:text-xl font-bold mb-2 text-[#91FDFE]">Tanda Plus Hijau</h2>
              <p class="text-sm lg:text-base xl:text-lg">
                Melambangkan 4 fakultas yang ada di Universitas Multimedia
                Nusantara yang berarti kerjasama dan solidaritas antar anggota.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-[#5E6D5A] h-64 text-white m-0 p-8 w-full flex flex-col justify-center align-center text-center">
  <div class="justify-center align-center text-slate-50 mb-4">
    <h2 class="text-lg lg:text-xl xl:text-2xl font-semibold">Tagline Gen X</h2>
  </div>
  <div class="justify-center align-center text-slate-50">
    <h2 class="text-xl lg:text-2xl xl:text-3xl font-bold">"Care for Health, Care for Life"</h2>
  </div>
</div>


<div class="bg-[#253A35]">
  <div class="py-16">
    <div class="min-w-screen h-3 bg-[#9BAA89] flex justify-center items-center">
      <h1 class="text-3xl font-bold text-white bg-[#253A35] text-center inline-block px-3">Maskot</h1>
    </div>
  </div>
</div>

<div class="bg-[#253A35] px-10 pb-10">
  <div class="flex flex-col sm:flex-row w-full md:justify-around justify-between px-4 md:px-10">
    <div
      class="left relative w-full sm:w-1/2 md:w-1/3 lg:w-80 xl:w-2/6 bg-[#9BAA89] my-6 sm:m-6 rounded-lg flex flex-col items-center p-4">
      <div class="flex w-full h-auto">
        <img src="{{ asset('assets/logo/MedicWhite_highres.png') }}" class="w-1/2 h-full">
        <h2
          class="w-40 md:w-40 lg:w-56 xl:w-72 h-auto absolute -right-10 md:-right-16 lg:-right-20 -top-4 md:-top-5 lg:-top-6 align-center bg-slate-50 text-[#425C3F] rounded-3xl text-2xl md:text-3xl lg:text-4xl text-center font-bold p-2 md:p-3 lg:p-4">
          Medi</h2>
      </div>
      <img src="{{ asset('assets/readMore/medi.png') }}" class="object-contain w-full mt-4">
    </div>
    <div
      class="right relative w-full sm:w-1/2 md:w-1/3 lg:w-80 xl:w-2/6 bg-[#9BAA89] my-6 sm:m-6 rounded-lg flex flex-col items-center p-4">
      <div class="flex w-full h-auto">
        <img src="{{ asset('assets/logo/MedicWhite_highres.png') }}" class="w-1/2 h-full">
        <h2
          class="w-40 md:w-40 lg:w-56 xl:w-72 h-auto absolute -right-10 md:-right-16 lg:-right-20 -top-4 md:-top-5 lg:-top-6 align-center bg-slate-50 text-[#425C3F] rounded-3xl text-2xl md:text-3xl lg:text-4xl text-center font-bold p-2 md:p-3 lg:p-4">
          Ical</h2>
      </div>
      <img src="{{ asset('assets/readMore/ical.png') }}" class="object-contain w-full mt-4">
    </div>
  </div>
</div>

@endsection