@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Top -->
    <section class="w-full h-[830px] px-8 bg-cover flex justify-center items-center bg-[url('https://images.unsplash.com/photo-1683009427540-c5bd6a32abf6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop')]">
        <div class="title text-center text-green-900 mb-6">
            <h2 class="text-3xl mb-6 font-bold ">WELCOME TO</h2>
            <h1 class="text-6xl font-bold">UMN MEDICAL CENTER</h1>
        </div>
    </section>
    <!-- Mid -->
    <section class="about flex flex-col-reverse h-auto md:h-[600px] md:flex-row-reverse py-16 px-4 md:px-12 bg-slate-50">
    <div class="text flex-1 w-full md:w-auto flex flex-col items-center md:items-start justify-center text-break px-4 md:px-0 z-10 mt-12 md:mt-0">
        <h3 class="w-full text-center md:text-left text-3xl font-bold">ABOUT UMN MEDICAL CENTER</h3>
        <p class="my-6 text-center md:text-left">UMN Medical Center merupakan Lembaga Semi Otonom di bawah pengawasan Badan Eksekutif Mahasiswa yang bergerak di bidang kesehatan. Mulai beroperasi sejak tahun 2014, dan telah resmi berdiri pada tahun 2015. UMN Medical Center kini sudah memasuki generasi kesepuluh, menunjukkan eksistensinya yang berkelanjutan dan dedikasinya dalam memberikan pelayanan kesehatan terbaik bagi civitas akademika Universitas Multimedia Nusantara.</p>
        <button class="rounded-full bg-green-950 text-2xl text-slate-50 text-center align-center p-4 px-6 transition duration-1000 ease-in-out hover:bg-green-800 hover:text-white hover:shadow-lg hover:transform hover:scale-105 hover:shadow-green-600 mx-auto md:mx-0"><a href="/about">Read more</a></button>
    </div>
    <div class="circle flex-1 w-[900px] md:w-[100px] relative mb-8 md:mb-0 pb-64 md:pb-0">
        <div class="absolute bg-lime-600 rounded-full w-[340px] h-[340px] ml-24 md:ml-24 mt-20"></div>
        <img src="https://images.unsplash.com/photo-1683009427540-c5bd6a32abf6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop" class="mt-30 mr-30 mb-2 ml-0 absolute w-64 h-64 rounded-full">
        <img src="https://images.unsplash.com/photo-1683009427540-c5bd6a32abf6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop" class="mt-28 mr-0 mb-46 ml-64 absolute w-80 h-80 rounded-full" alt="">
        <img src="https://images.unsplash.com/photo-1683009427540-c5bd6a32abf6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop" class="mt-72 mr-20 mb-2 ml-16 absolute w-44 h-44 rounded-full" alt="">
    </div>
</section>

    <!-- Bottom -->
    <section class="bottom bg-lime-800 overflow-hidden py-12">
    <!-- VISI Section -->
    <div class="visi flex flex-col md:flex-row items-center pl-6 mb-8 md:pl-10 relative">
        <div class="w-full md:w-1/3 order-1 relative mb-4 md:mb-0">
            <img src="https://images.unsplash.com/photo-1683009427540-c5bd6a32abf6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop" class="w-full h-auto shadow-lg" alt="">
        </div>
        <div class="w-full h-64 md:w-2/3 bg-green-950 text-white p-4 md:p-10 flex flex-col justify-center items-start order-2 relative z-10 md:-ml-10">
            <h3 class="text-2xl md:text-3xl font-bold">VISI</h3>
            <p class="text-sm md:text-base text-justify mt-4">Menjadikan UMN Medical Center sebagai unit sarana penolongan pertama di dalam kampus dengan menjunjung tinggi kekeluargaan dan budi luhur serta berintegritas dalam segala hal.</p>
        </div>
    </div>
    <!-- MISI Section -->
    <div class="misi flex flex-col md:flex-row items-center pr-6 md:pr-10 relative">
        <div class="w-full md:w-2/5 order-1 md:order-2 relative mb-4 md:mb-0">
            <img class="w-full md:w-80 h-[450px] shadow-lg" src="https://images.unsplash.com/photo-1609560140261-4efaa689b6c8?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bmF0dXJlJTIwcG9ydHJhaXR8ZW58MHx8MHx8fDA%3D" alt="">
        </div>
        <div class="w-full text-xs md:w-4/5 bg-green-950 text-white p-4 md:p-10 flex flex-col justify-center items-start order-2 md:order-1 relative z-10 md:-mr-10 lg:-mr-12 xl:-mr-16">
            <h3 class="text-2xl px-4 md:text-3xl font-bold">MISI</h3>
            <ol class="list-decimal px-4 md:px-6 lg:px-10 md:text-sm lg:text-base text-justify mt-4 space-y-2">
                <li>Memberikan penanganan dan pelayanan yang terbaik terhadap UMN Medical Center, baik untuk internal maupun eksternal Universitas Multimedia Nusantara.</li>
                <li>Membangun keterampilan kerja setiap anggota UMN Medical Center dalam segala aspek secara kolaboratif.</li>
                <li>Menyediakan dan memberikan edukasi mengenai kesehatan kepada pihak internal dan eksternal UMN Medical Center secara kreatif, inovatif, dan interaktif.</li>
                <li>Meningkatkan rasa kepekaan dan tanggung jawab setiap anggota UMN Medical Center dalam menjalankan kewajibannya.</li>
                <li>Menjadikan UMN Medical Center sebagai wadah pengembangan mahasiswa tidak hanya dari segi medis namun juga mengembangkan diri mahasiswa. Menjunjung tinggi keadilan baik terhadap pasien, sesama, serta diri sendiri.</li>
            </ol>
        </div>
    </div>
</section>

</div>
@endsection
