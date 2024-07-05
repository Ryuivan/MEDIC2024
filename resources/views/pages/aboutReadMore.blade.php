@extends('layouts.app')

@section('content')
<div class="m-0 p-0 w-full" style="scroll-behavior: smooth">
    <div class="bg-[#253A35] p-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="mx-auto md:ml-auto md:mr-auto mb-8">
                <img src="{{ asset('assets/about/img1.png') }}" class="object-contain w-72 md:w-96"/>
            </div>
            <div class="mx-auto md:ml-auto md:mr-auto mb-8">
                <img src="{{ asset('assets/about/test.png') }}" class="object-contain w-72 md:w-96"/>
            </div>
            <div class="mx-auto md:ml-auto md:mr-auto mb-8">
                <img src="{{ asset('assets/about/img2.png') }}" class="object-contain w-72 md:w-96"/>
            </div>
        </div>
        <div class="flex w-full text-center md:text-justify justify-center align-center">
            <p class="pb-10 w-5/6 text-slate-50">UMN Medical Center berorientasi pada pelayanan kesehatan dengan kewajiban untuk memberikan pertolongan pertama, obat-obatan, serta edukasi kepada seluruh civitas akademika Universitas Multimedia Nusantara melalui kampanye-kampanye interaktif dan seminar mengenai kesehatan. Selain memiliki kegiatan yang interaktif, UMN Medical Center juga belajar mengenai solidaritas dan kekeluargaan yang disertai dengan pengimplementasian nilai 5C, baik di dalam maupun di luar kampus.</p>
        </div>
    </div>


    <div class="bg-[#253A35] p-10">
        <div class="flex align-center justify-center justify-between items-center h-48 relative -top-6">
            <div class="bg-[#9BAA89] w-3/4 h-6 relative -left-12"></div>
            <h1 class="text-slate-50 text-5xl font-extrabold">Maskot</h1>
            <div class="bg-[#9BAA89] w-3/4 h-6 relative -right-12"></div>
        </div>
        <div class="flex flex-col sm:flex-row w-full md:justify-around justify-between px-4 md:px-10">
            <div class="left relative w-full sm:w-1/2 md:w-1/3 lg:w-80 xl:w-2/6 bg-[#9BAA89] my-6 sm:m-6 rounded-lg flex flex-col items-center p-4">
                <div class="flex w-full h-auto">
                    <img src="{{ asset('assets/logo/MedicWhite_highres.png') }}" class="w-1/2 h-full">
                    <h2 class="w-40 md:w-40 lg:w-56 xl:w-72 h-auto absolute -right-10 md:-right-16 lg:-right-20 -top-4 md:-top-5 lg:-top-6 align-center bg-slate-50 text-[#425C3F] rounded-3xl text-2xl md:text-3xl lg:text-4xl text-center font-bold p-2 md:p-3 lg:p-4">Medi</h2>
                </div>
                <img src="{{ asset('assets/readMore/medi.png') }}" class="object-contain w-full mt-4">
            </div>
            <div class="right relative w-full sm:w-1/2 md:w-1/3 lg:w-80 xl:w-2/6 bg-[#9BAA89] my-6 sm:m-6 rounded-lg flex flex-col items-center p-4">
                <div class="flex w-full h-auto">
                    <img src="{{ asset('assets/logo/MedicWhite_highres.png') }}" class="w-1/2 h-full">
                    <h2 class="w-40 md:w-40 lg:w-56 xl:w-72 h-auto absolute -right-10 md:-right-16 lg:-right-20 -top-4 md:-top-5 lg:-top-6 align-center bg-slate-50 text-[#425C3F] rounded-3xl text-2xl md:text-3xl lg:text-4xl text-center font-bold p-2 md:p-3 lg:p-4">Ical</h2>
                </div>
                <img src="{{ asset('assets/readMore/ical.png') }}" class="object-contain w-full mt-4">
            </div>
        </div>
    </div>
</div>
@endsection 