@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center py-0">
  <div class="flex flex-col px-0 w-full bg-white max-md:max-w-full">
    <h1
      class="self-center mt-16 text-3xl font-bold text-gray-800 max-md:mt-10"
    >
      Program Kerja Rutin
    </h1>
    <section
      class="self-center mt-16 w-full max-w-[1310px] max-md:mt-10 max-md:max-w-full"
    >
      <div
        class="flex gap-5 my-16 px-8 max-md:flex-col max-md:gap-0 h-full max-h-[1900px]"
      >
        <!-- block 1 -->
        <div class="flex flex-col w-3/12 max-md:w-full">
          <article class="flex flex-col grow items-start max-md:mt-10">
            <div class="flex items-center justify-center w-full h-full">
              <div
                class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/pelatihan.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[219px]"
                />
              </div>
            </div>
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/c320a1b0411ecbe3880b62f1877f21db530284fffae0276f313a7eaf0c585527?apiKey=25748477bc014dd79dfb896b955120fd&"
              alt=""
              class="mt-3 aspect-[0.26] fill-stone-300 w-[5px]"
            />
            <div class="flex flex-col pl-4 mt-2.5">
              <h2 class="text-2xl font-bold">Pelatihan</h2>
              <p class="mt-4 text-base text-center">
                Pelatihan untuk anggota UMN Medical Center.
              </p>
            </div>
          </article>
        </div>
        <!-- block 2 -->
        <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
          <article class="flex flex-col grow items-start max-md:mt-10">
          <div class="flex items-center justify-center w-full h-full">
              <div
                class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Piket.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[219px]"
                />
              </div>
            </div>
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/c320a1b0411ecbe3880b62f1877f21db530284fffae0276f313a7eaf0c585527?apiKey=25748477bc014dd79dfb896b955120fd&"
              alt=""
              class="mt-3 aspect-[0.26] fill-stone-300 w-[5px]"
            />
            <h2
              class="mt-2 ml-7 text-2xl font-bold text-gray-800 max-md:ml-2.5"
            >
              Piket
            </h2>
            <div
              class="shrink-0 self-stretch mt-2.5 h-px bg-white"
              aria-hidden="true"
            ></div>
            <p
              class="mt-2.5 text-base text-center text-black max-md:mr-2.5"
            >
              Senin-Jumat (08.00-17.00)<br />
              Sabtu (08.00-11.00)
            </p>
          </article>
        </div>
        <!-- block 3 -->
        <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
          <article class="flex flex-col grow text-gray-800 max-md:mt-10">
            <div class="flex items-center justify-center w-full h-full">
              <div
                class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Meeting.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[219px]"
                />
              </div>
            </div>
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/3cbd3991234f388eecc316cdd85462d370e925a87973b174e9d7e3df3f7cec93?apiKey=25748477bc014dd79dfb896b955120fd&"
              alt=""
              class="mt-3 aspect-[0.28] fill-stone-300 w-[5px]"
            />
            <div class="flex flex-col pl-4 mt-2.5">
              <h2 class="text-2xl font-bold">Rapat</h2>
              <p class="mt-4 text-base text-center">
                Update dan evaluasi kinerja setiap anggota
              </p>
            </div>
          </article>
        </div>
        <!-- block 4-->
        <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
          <article
            class="flex flex-col items-start mt-1 text-2xl font-bold text-gray-800 max-md:mt-10"
          >
            <div class="flex items-center justify-center w-full h-full">
              <div
                class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Pengajuan jasa.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[219px]"
                />
              </div>
            </div>
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/3cbd3991234f388eecc316cdd85462d370e925a87973b174e9d7e3df3f7cec93?apiKey=25748477bc014dd79dfb896b955120fd&"
              alt=""
              class="mt-2 aspect-[0.28] fill-stone-300 w-[5px]"
            />
            <div class="flex flex-col pl-4 mt-2.5">
              <h2 class="text-2xl font-bold">Pengajuan Jasa</h2>
            </div>
          </article>
        </div>
      </div>
    </section>
    <!--section program kerja unggulan-->
    <section
      class="flex flex-col items-center py-16 pr-14 pl-14 mt-40 w-full bg-teal-950 max-md:px-5 max-md:mt max-md:max-w-full"
    >
      <h2 class="text-3xl font-bold text-stone-300 mb-16 h-full">
        Program Kerja Unggulan
      </h2>
      <div class="self-stretch mt-8 max-md:max-w-full">
        <!-- block 1 -->
        <div
          class="flex gap-5 max-md:flex-col max-md:gap-0 justify-center items-start"
        >
          <div class="flex flex-col w/12 max-md:ml-0 max-md:w-full mx-4">
            <article
              class="flex flex-col justify-center text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
            >
              <div class="flex items-center justify-center w-full h-full">
                <div
                  class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
                >
                  <img
                    src="{{ asset('assets/proker/Apresiasi.png') }}"
                    alt="Pelatihan Icon"
                    class="w-2/4 md:w-[219px]"
                  />
                </div>
              </div>
              <div class="flex gap-5 mt-9">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2211b0600f27fdc92a892a94d1e7cbb60c778f076cc64eb185dd4e02cc818d8?apiKey=25748477bc014dd79dfb896b955120fd&"
                  alt=""
                  class="shrink-0 my-auto aspect-[0.28] fill-stone-300 w-[5px]"
                />
                <h3 class="flex-auto">Apresiasi</h3>
              </div>
              <div
                class="shrink-0 mt-5 h-0.5 bg-white"
                aria-hidden="true"
              ></div>
            </article>
          </div>
          <!-- block 2 -->
          <div class="flex flex-col w/12 max-md:ml-0 max-md:w-full mx-4">
            <article
              class="flex flex-col justify-center text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
            >
              <div class="flex items-center justify-center w-full h-full">
                <div
                  class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
                >
                  <img
                    src="{{ asset('assets/proker/Identitas.png') }}"
                    alt="Pelatihan Icon"
                    class="w-2/4 md:w-[219px]"
                  />
                </div>
              </div>
              <div
                class="flex gap-px mt-10 text-2xl font-bold whitespace-nowrap text-stone-300 max-md:mt-10"
              >
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/c997ea2ce4567709533532002efd1908b2ab3a0a5babaeaad006686e97fce5b0?apiKey=25748477bc014dd79dfb896b955120fd&"
                  alt=""
                  class="shrink-0 my-auto aspect-[0.28] fill-stone-300 w-[5px]"
                />
                <div class="flex flex-col w-full">
                  <h3 class="self-center w-full">Identity</h3>
                  <div
                    class="shrink-0 mt-4 h-0.5 bg-zinc-200"
                    aria-hidden="true"
                  ></div>
                </div>
              </div>
              <p class="mt-5 text-base text-white break-words">
                Kartu tanda pengenal<br />
                untuk anggota UMN Medical Center
              </p>
            </article>
          </div>
          <!-- block 3 -->
          <div class="flex flex-col w/12 max-md:ml-0 max-md:w-full mx-4">
            <article
              class="flex flex-col text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
            >
              <div class="flex items-center justify-center w-full h-full">
                <div
                  class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
                >
                  <img
                    src="{{ asset('assets/proker/alive.png') }}"
                    alt="Pelatihan Icon"
                    class="w-1/4 md:w-[219px]"
                  />
                </div>
              </div>
              <div class="flex gap-4 items-start mt-3">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/c997ea2ce4567709533532002efd1908b2ab3a0a5babaeaad006686e97fce5b0?apiKey=25748477bc014dd79dfb896b955120fd&"
                  alt=""
                  class="shrink-0 my-4 aspect-[0.28] fill-stone-300 w-[5px]"
                />
                <div class="flex flex-col mt-2 text-left">
                  <h3 class="text-2xl font-bold text-cyan-200">Alive</h3>
                  <p class="mt-0 text-xl">Skin Health</p>
                  <div
                    class="shrink-0 mt-3 h-0.5 bg-zinc-200"
                    aria-hidden="true"
                  ></div>
                  <p class="mt-4 text-base text-center">
                    Kegiatan tahunan yang membahas tentang kesehatan
                  </p>
                </div>
              </div>
            </article>
          </div>
          <!-- block 4 -->
          <div class="flex flex-col w/12 max-md:ml-0 max-md:w-full mx-4">
            <article
              class="flex flex-col text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
            >
              <div class="flex items-center justify-center w-full h-full">
                <div
                  class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
                >
                  <img
                    src="{{ asset('assets/proker/Cek kesehatan.png') }}"
                    alt="Pelatihan Icon"
                    class="w-2/4 md:w-[219px]"
                  />
                </div>
              </div>
              <div class="flex gap-4 items-start mt-6">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/c997ea2ce4567709533532002efd1908b2ab3a0a5babaeaad006686e97fce5b0?apiKey=25748477bc014dd79dfb896b955120fd&"
                  alt=""
                  class="shrink-0 my-auto aspect-[0.28] fill-stone-300 w-[5px]"
                />
                <div class="flex flex-col mt-2 w-full">
                  <h3 class="text-2xl font-bold text-cyan-200">
                    Cek Kesehatan
                  </h3>
                  <div
                    class="shrink-0 mt-3 h-0.5 bg-zinc-200"
                    aria-hidden="true"
                  ></div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
      <!-- baris 2 -->
      <div class="self-stretch mt-12 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0 justify-center items-start  ">
          <div class="flex flex-col w/12 max-md:ml-0 max-md:w-full mx-4">
            <article
              class="flex flex-col text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
            >
              <div class="flex items-center justify-center w-full h-full">
                <div
                  class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
                >
                  <img
                    src="{{ asset('assets/proker/Pelatihan civitas umn.png') }}"
                    alt="Pelatihan Icon"
                    class="w-2/4 md:w-[219px]"
                  />
                </div>
              </div>
              <div class="flex gap-4 items-start mt-6">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/c997ea2ce4567709533532002efd1908b2ab3a0a5babaeaad006686e97fce5b0?apiKey=25748477bc014dd79dfb896b955120fd&"
                  alt=""
                  class="shrink-0 my-8 aspect-[0.28] fill-stone-300 w-[5px]"
                />
                <div class="flex flex-col mt-2 w-full">
                  <h3
                    class="text-1xl font-bold text-cyan-200 max-w-[240px] break-words"
                  >
                    Pelatihan medis civitas UMN
                  </h3>
                  <div
                    class="shrink-0 mt-3 h-0.5 bg-zinc-200"
                    aria-hidden="true"
                  ></div>
                </div>
              </div>
            </article>
          </div>
          <div class="flex flex-col w/12 max-md:ml-0 max-md:w-full mx-4">
            <article
              class="flex flex-col text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
            >
              <div class="flex items-center justify-center w-full h-full">
                <div
                  class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
                >
                  <img
                    src="{{ asset('assets/proker/Bonding.png') }}"
                    alt="Pelatihan Icon"
                    class="w-2/4 md:w-[219px]"
                  />
                </div>
              </div>
              <div class="flex gap-4 items-start mt-6">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/c997ea2ce4567709533532002efd1908b2ab3a0a5babaeaad006686e97fce5b0?apiKey=25748477bc014dd79dfb896b955120fd&"
                  alt=""
                  class="shrink-0 my-auto aspect-[0.28] fill-stone-300 w-[5px]"
                />
                <div class="flex flex-col mt-2">
                  <h3
                    class="text-2xl font-bold text-cyan-200 w-[220px] break-words"
                  >
                    Bonding
                  </h3>
                  <div
                    class="shrink-0 mt-3 h-0.5 bg-zinc-200"
                    aria-hidden="true"
                  ></div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

@endsection
