@extends('layouts.app')

@section('content')

<div class="py-16">
  <div class="min-w-screen h-3 flex justify-center items-center">
    <h1 class="text-3xl font-bold text-black text-center inline-block px-3">Program Kerja Rutin</h1>
  </div>
</div>

<div class="flex flex-col w-full h-auto items-center bg-white max-md:max-w-full mb-32">
  <section class="self-center w-full max-w-[1310px] max-md:max-w-full">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 lg:grid-cols-4 px-8">

      @foreach ($rutin as $proker)
      <div class="mt-3">
        <div
          class="mx-auto bg-[#D5DECD] rounded-full flex justify-center items-center w-48 h-48 lg:w-60 lg:h-60 p-6 lg:p-10">
          <img src="{{ asset($proker['img']) }}" alt={{ $proker['alt'] }} class="w-32 h-32 lg:w-40 lg:h-40">
        </div>
        <div class="mx-auto max-w-48 lg:max-w-60">
          <h1 class="mt-5 text-center font-semibold text-lg md:text-xl">{{ $proker['title'] }}</h1>
          <div class="w-full h-[1px] bg-black my-3"></div>
          <h3 class="text-center font-normal text-sm md:text-base">{!! $proker['description'] !!}</h3>
        </div>
      </div>
      @endforeach

    </div>
  </section>
</div>

<!--section program kerja unggulan-->

<div class="py-16 bg-[#253A35]">
  <div class="min-w-screen h-3 flex justify-center items-center">
    <h1 class="text-3xl font-bold text-[#D5DECD] text-center inline-block px-3">Program Kerja Unggulan</h1>
  </div>
</div>

<section class="bg-[#253A35] flex flex-col items-center px-8 max-md:max-w-full pb-32">
  <div class="self-stretch max-md:max-w-full">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 max-md:grid-cols-2 max-md:gap-5">

      @foreach ($unggulan as $proker)
      <div class="mt-3">
        <div
          class="mx-auto bg-[#D5DECD] rounded-full flex justify-center items-center w-48 h-48 lg:w-60 lg:h-60 p-6 lg:p-10">
          <img src="{{ asset($proker['img']) }}" alt={{ $proker['alt'] }} class="w-32 h-32 lg:w-40 lg:h-40">
        </div>
        <div class="mx-auto max-w-48 lg:max-w-60">
          <h1 class="mt-5 text-center font-semibold text-lg text-[#91FDDE] md:text-xl">{{ $proker['title'] }}</h1>
          <div class="w-full h-[1px] bg-white my-3"></div>
          <h3 class="text-center font-normal text-sm md:text-base text-white">{!! $proker['description'] !!}</h3>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>

@endsection