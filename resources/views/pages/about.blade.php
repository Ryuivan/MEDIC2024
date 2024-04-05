@extends('layouts.app')

@section('content')
<div class="m-0 p-0 ">
    <div class="bg-white p-10">
        <div class="m-0 p-0 flex">
            <div class="flex-initial mx-10">
                <img src="{{ asset('assets/about/test.png') }}" class="object-contain w-150"/>
            </div>
            <div class="flex-initial mx-10">
                <img src="{{ asset('assets/about/test.png') }}" />
            </div>
            <div class="flex-initial mx-10">
                <img src="{{ asset('assets/about/test.png') }}" />
            </div>
        </div>
        <div class="">
            <h1 class="text-xl py-10">UMN Medical Center</h1>
            <p class="pb-10">UMN Medical Center merupakan Lembaga Semi Otonom di bawah pengawasan Badan Eksekutif Mahasiswa yang bergerak di bidang kesehatan. Mulai beroperasi sejak tahun 2014, dan telah resmi berdiri pada tahun 2015. UMN Medical Center kini sudah memasuki generasi kesepuluh, menunjukkan eksistensinya yang berkelanjutan dan dedikasinya dalam memberikan pelayanan kesehatan terbaik bagi civitas akademika Universitas Multimedia Nusantara. UMN Medical Center berorientasi pada pelayanan kesehatan dengan kewajiban untuk memberikan pertolongan pertama, obat-obatan, serta edukasi kepada seluruh civitas akademika Universitas Multimedia Nusantara melalui kampanye-kampanye interaktif dan seminar mengenai kesehatan. Selain memiliki kegiatan yang interaktif, UMN Medical Center juga belajar mengenai solidaritas dan kekeluargaan yang disertai dengan pengimplementasian nilai 5C, baik di dalam maupun di luar kampus.</p>
        <div>
    </div>
    <div class="bg-black text-white m-0 p-8">
        <div class="flex p-0">
            <div class="p-4">
                <h1 class="text-lg py-8">Visi</h1>
                <p>Menjadikan UMN Medical Center sebagai unit sarana penolongan pertama di dalam kampus dengan menjunjung tinggi kekeluargaan dan budi luhur serta berintegritas dalam segala hal.</p>
            </div>
            <div class="p-4">
                <h1 class="text-lg py-8">Misi</h1>
                <ol class="list-decimal">
                    <li>Memberikan penanganan dan pelayanan yang terbaik terhadap UMN Medical Center, baik untuk internal maupun eksternal Universitas Multimedia Nusantara.</li>
                    <li>Membangun keterampilan kerja setiap anggota UMN Medical Center dalam segala aspek secara kolaboratif.</li>
                    <li>Menyediakan dan memberikan edukasi mengenai kesehatan kepada pihak internal dan eksternal UMN Medical Center secara kreatif, inovatif, dan interaktif.</li>
                    <li>Meningkatkan rasa kepekaan dan tanggung jawab setiap anggota UMN Medical Center dalam menjalankan kewajibannya.</li>
                    <li>Menjadikan UMN Medical Center sebagai wadah pengembangan mahasiswa tidak hanya dari segi medis namun juga mengembangkan diri mahasiswa.</li>
                    <li>Menjunjung tinggi keadilan baik terhadap pasien, sesama, serta diri sendiri.</li>
                </ol> 
            </div>
        </div>
    </div>
</div>
@endsection