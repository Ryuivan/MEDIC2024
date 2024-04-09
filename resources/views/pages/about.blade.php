@extends('layouts.app')

@section('content')

<div class="p-0 m-0 bg-lime-950 bg-cover">
  <div class="text-slate-50 m-0 p-4 w-full h-full">
    <div class="flex flex-wrap mb-4 items-center justify-between">
      <div class="w-full">
        <div class="flex justify-center mb-12">
          <div class="bg-lime-950 px-4 py-6">
            <h2 class="text-2xl font-bold text-slate-50">Logo dan filosofi</h2>
          </div>
        </div>
      </div>
      <div class="md:flex md:flex-wrap md:-mx-4">
        <div class="w-full md:w-1/2 md:px-4">
          <div class="flex items-center my-10 mx-8">
            <div class="w-auto mr-4">
              <img
                src="gambar1.jpg"
                class="w-32 md:w-40 h-32 md:h-40 rounded-full border-2 border-green-500"
              />
            </div>
            <div class="w-full">
              <h2 class="text-xl font-bold mb-2 text-teal-300">
                Sisi Terbuka pada Pertemuan Tanda Plus
              </h2>
              <p class="">
                Melambangkan keterbukaan UMN Medical Center kepada siapapun.
              </p>
            </div>
          </div>
          <div class="flex items-center my-10 mx-8">
            <div class="w-auto mr-4 mb-4 md:mb-0 flex-shrink-0">
              <img
                src="gambar2.jpg"
                class="w-32 md:w-40 h-32 md:h-40 rounded-full border-2 border-green-500"
              />
            </div>
            <div class="w-full">
              <h2 class="text-xl font-bold mb-2 text-teal-300">Warna Hijau</h2>
              <p class="">Melambangkan kesegaran dari keharmonisan.</p>
            </div>
          </div>
          <div class="flex items-center my-10 mx-8">
            <div class="w-auto mr-4 mb-4 md:mb-0 flex-shrink-0">
              <img
                src="gambar3.jpg"
                class="w-32 md:w-40 h-32 md:h-40 rounded-full border-2 border-green-500"
              />
            </div>
            <div class="w-5/6">
              <h2 class="text-xl font-bold mb-2 text-teal-300">
                Bagian Melengkung pada Ujung Tanda Plus
              </h2>
              <p class="">Melambangkan fleksibilitas.</p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 md:px-4">
          <div class="flex items-center my-10 mx-8">
            <div class="w-auto mr-4 mb-4 md:mb-0 flex-shrink-0">
              <img
                src="gambar4.jpg"
                class="w-32 md:w-40 h-32 md:h-40 rounded-full border-2 border-green-500"
              />
            </div>
            <div class="w-5/6">
              <h2 class="text-xl font-bold mb-2 text-teal-300">
                Logo Universitas Multimedia Nusantara
              </h2>
              <p class="">
                Melambangkan UMN Medical Center merupakan bagian dari
                Universitas Multimedia Nusantara.
              </p>
            </div>
          </div>
          <div class="flex items-center my-10 mx-8">
            <div class="w-auto mr-4 mb-4 md:mb-0 flex-shrink-0">
              <img
                src="gambar5.jpg"
                class="w-32 md:w-40 h-32 md:h-40 rounded-full border-2 border-green-500"
              />
            </div>
            <div class="w-5/6">
              <h2 class="text-xl font-bold mb-2 text-teal-300">Tanda Plus Hijau</h2>
              <p class="">
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

@endsection
