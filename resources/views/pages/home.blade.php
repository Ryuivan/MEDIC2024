@extends('layouts.app')

@section('content')

<div class="m-0 p-0">
  <!-- Top -->
  <section
    class="w-full h-[830px] sm:h-[600px] md:h-[500px] lg:h-[400px] xl:h-[830px] px-8 bg-cover bg-center bg-no-repeat flex justify-center"
    style="
          background-image: url('{{ asset("assets/foto/home.jpg") }}'); "
      >
        <div class=" title text-center text-green-900 mb-6 pt-20">
    <h2 class="text-3xl sm:text-2xl md:text-xl lg:text-lg xl:text-4xl mb-6 font-bold">
      WELCOME TO
    </h2>
    <h1 class="text-6xl sm:text-5xl md:text-4xl lg:text-4xl xl:text-8xl font-bold">
      UMN MEDICAL CENTER
    </h1>
</div>
</section>
<!-- Mid -->
<section
  class="about flex flex-col-reverse h-auto md:h-[670px] md:flex-row-reverse py-8 overflow-hidden md:px-8 bg-slate-50 relative">
  <div
    class="text lg:w-[43%] xl:w-[50%] xl:mr-20 lg:ml-auto lg:mr-auto lg:px-4 md:w-[45%] flex flex-col items-center md:items-start justify-center text-break px-4 md:px-0 z-10 mt-[100px] md:mt-0">
    <h3 class="w-full text-center md:text-left xl:text-3xl lg:text-2xl font-bold text-xl">
      ABOUT UMN MEDICAL CENTER
    </h3>
    <p class="my-6 text-center xl:text-lg lg:text-[16px] md:text-justify text-[14px]">
      UMN Medical Center merupakan Lembaga Semi Otonom di bawah pengawasan
      Badan Eksekutif Mahasiswa yang bergerak di bidang kesehatan. Mulai
      beroperasi sejak tahun 2014, dan telah resmi berdiri pada tahun
      2015. UMN Medical Center kini sudah memasuki generasi kesepuluh,
      menunjukkan eksistensinya yang berkelanjutan dan dedikasinya dalam
      memberikan pelayanan kesehatan terbaik bagi civitas akademika
      Universitas Multimedia Nusantara.
    </p>
    <div class="flex justify-center items-center w-full">
      <button
        class="rounded-full bg-green-950 text-slate-50 text-center p-4 transition duration-1000 ease-in-out hover:bg-green-800 hover:text-white hover:shadow-lg hover:transform hover:scale-105 hover:shadow-green-600 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl px-5 sm:px-5 md:px-6 lg:px-8 xl:px-10 py-3 sm:py-3 md:py-4 lg:py-5 xl:py-6">
        <a href="/about">Read more</a>
      </button>
    </div>
  </div>
  <div
    class="circle flex sm:my-[1%] md:my-[10%] lg:my-14 md:mx-0 lg:mx-[4%] lg:w-[57%] xl:w-[50%] xl:ml-16 md:w-[57%] relative md:mb-0 pb-64 md:pb-0 justify-center md:justify-normal">
    <div
      class="absolute bg-lime-600 rounded-full w-[220px] h-[220px] md:w-[240px] md:h-[240px] lg:w-[320px] lg:h-[320px] -ml-2 mt-12 md:mt-12 md:ml-12 lg:mt-20 lg:ml-24">
    </div>
    <img src="{{ asset('assets/foto/bphkoor.jpg') }}"
      class="mt-30 mr-40 mb-2 -ml-6 md:ml-0 absolute w-40 h-40 md:w-44 md:h-44 lg:w-60 lg:h-60 rounded-full object-cover"
      alt="pic1" />
    <img src="{{ asset('assets/foto/home_x.jpg') }}"
      class="mt-24 mr-16 mb-46 ml-52 md:ml-44 absolute w-[180px] h-[180px] md:w-52 md:h-52 lg:w-72 lg:h-72 lg:mt-32 lg:ml-60 rounded-full object-cover"
      alt="pic2" />
    <img src="{{ asset('assets/foto/home.jpg') }}"
      class="mt-44 mr-32 mb-2 -ml-12 md:ml-8 absolute w-28 h-28 md:w-32 md:h-32 lg:w-40 lg:h-40 lg:mt-72 lg:ml-10 rounded-full object-cover"
      alt="pic3" />
  </div>
</section>
<!-- Bottom -->
<section class="bottom bg-lime-800 overflow-hidden py-12">
  <!-- VISI Section -->
  <div
    class="visi flex flex-wrap flex-col flex-grow items-center pl-6 mb-8 mr-0 md:pl-10 md:flex-row md:justify-center md:items-center">
    <div
      class="w-full order-1 relative flex justify-end z-50 lg:w-2/5 md:w-[50%] md:justify-center md:items-center md:mb-0">
      <img src="{{ asset('assets/foto/pelantikan_1.jpg') }}"
        class="w-[80%] h-auto shadow-lg flex lg:w-full md:w-[90%] md:justify-center sm:w-[75%] justify-end"
        alt="visi image" />
    </div>
    <div
      class="w-auto h-60 bg-green-950 flex flex-col flex-grow text-white p-4 pl-10 items-start order-2 relative -mt-28 -ml-12 z-0 justify-end pb-6 xl:h-60 lg:w-3/5 lg:h-60 lg:text-base lg:justify-start lg:p-8 md:w-2/5 md:h-3/6 md:p-7 md:-ml-10 md:z-50 md:m-0 sm:h-40 sm:-mt-20 sm:text-base">
      <h3 class="text-2xl md:text-3xl font-bold">VISI</h3>
      <p class="text-sm text-justify mt-4 md:text-[16px] sm:text-sm">
        Menjadikan UMN Medical Center sebagai unit sarana penolongan
        pertama di dalam kampus dengan menjunjung tinggi kekeluargaan dan
        budi luhur serta berintegritas dalam segala hal.
      </p>
    </div>
  </div>
  <!-- MISI Section -->
  <div class="misi w-full flex flex-row relative justify-center items-center">
    <!-- wrapper -->
    <div class="w-0 flex flex-row flex-grow order-1 z-50 items-start
                  relative justify-start self-start
                  md:order-2 md:-ml-5 md:z-0
                  md:justify-center md:items-center md:w-1/3">
      <div class="w-8 bg-green-950 flex-grow p-4 order-1 relative -z-1
                    items-center justify-center hidden
                    xl:flex xl:h-[27rem]
                    lg:flex
                    md:z-50 md:object-none md:order-2 md:-ml-8 md:h-[27rem] md:flex 
                    "></div>
      <div class="w-64 max-h-64 md:flex flex-grow relative mb-4 order-2 -ml-6 z-50
                    justify-start items-start hidden
                    md:mb-0 md:ml-0 md:-z-1 md:order-1 lg:w-64
                    md:justify-center md:items-center">
        <img class="w-full h-[27rem] xl:h-[29rem] md:h-[29rem] shadow-lg object-cover"
          src="{{ asset('assets/foto/pelatihan_1.jpg') }}" alt="misi image" />
      </div>
    </div>
    <!-- misi text -->
    <div
      class="relative w-full h-auto md:h-[27rem] bg-green-950 text-white p-8 z-50 md:max-h-[27rem] lg:max-w-[70rem] md:max-w-[52rem]">
      <img class="w-48 h-auto shadow-lg float-left m-4 flex md:hidden lg:hidden xl:hidden"
        src="{{ asset('assets/foto/pelatihan_1.jpg') }}" alt="misi image" />
      <div class="text-sm">
        <h3 class="text-xl md:text-3xl font-bold">MISI</h3>
        <ol
          class="list-none text-justify text-sm mt-4 space-y-2 md:list-decimal xl:text-lg lg:text-[16px] md:text-[16px] sm:text-sm px-4">
          <li>
            Memberikan penanganan dan pelayanan yang terbaik terhadap UMN Medical Center, baik untuk internal maupun
            eksternal Universitas Multimedia Nusantara.
          </li>
          <li>
            Membangun keterampilan kerja setiap anggota UMN Medical Center dalam segala aspek secara kolaboratif.
          </li>
          <li>
            Menyediakan dan memberikan edukasi mengenai kesehatan kepada pihak internal dan eksternal UMN Medical Center
            secara kreatif, inovatif, dan interaktif.
          </li>
          <li>
            Meningkatkan rasa kepekaan dan tanggung jawab setiap anggota UMN Medical Center dalam menjalankan
            kewajibannya.
          </li>
          <li>
            Menjadikan UMN Medical Center sebagai wadah pengembangan mahasiswa tidak hanya dari segi medis namun juga
            mengembangkan diri mahasiswa.
          </li>
          <li>
            Menjunjung tinggi keadilan baik terhadap pasien, sesama, serta diri sendiri.
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>
</div>

@endsection