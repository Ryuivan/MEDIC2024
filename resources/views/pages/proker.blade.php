@extends('layouts.app') @section('content')

<div class="flex flex-col justify-center py-0">
  <div
    class="flex flex-col px-0 w-full md:h-[38rem] h-auto items-center bg-white max-md:max-w-full"
  >
    <h1
      class="self-center flex align-center items-center justify-center h-28 text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-800"
    >
      Program Kerja Rutin
    </h1>
    <section class="self-center w-full max-w-[1310px] max-md:max-w-full">
      <div
        class="grid grid-cols-1 gap-5 my-8 px-8 md:grid-cols-4 max-md:grid-cols-2 max-md:gap-5 max-md:px-2 h-full"
      >
        <!-- block 1 -->
        <div
          class="flex flex-col w-full max-md:w-full items-center justify-center px-4"
        >
          <article
            class="flex flex-col grow items-center w-full justify-start max-md:mt-10"
          >
            <div class="flex items-center justify-center w-full h-auto">
              <div
                class="rounded-full bg-[#D5DECD] flex justify-center items-center w-[min(100%,210px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/pelatihan.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[5rem] lg:w-[8rem]"
                />
              </div>
            </div>
            <div class="mt-3">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c320a1b0411ecbe3880b62f1877f21db530284fffae0276f313a7eaf0c585527?apiKey=25748477bc014dd79dfb896b955120fd&"
                alt=""
                class="aspect-[0.26] fill-stone-300 w-[5px]"
              />
              <div class="flex flex-col px-2 mt-2.5 align-center">
                <h2
                  class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold text-center"
                >
                  Pelatihan
                </h2>
                <p
                  class="text-sm md:text-base lg:text-lg xl:text-xl mt-4 text-center"
                >
                  Pelatihan untuk anggota UMN Medical Center.
                </p>
              </div>
            </div>
          </article>
        </div>
        <!-- block 2 -->
        <div
          class="flex flex-col w-full max-md:w-full items-center justify-center px-4"
        >
          <article
            class="flex flex-col grow items-center w-full justify-start max-md:mt-10"
          >
            <div class="flex items-center justify-center w-full h-auto">
              <div
                class="rounded-full bg-[#D5DECD] flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Piket.png') }}"
                  alt="Piket Icon"
                  class="w-2/4 md:w-[5rem] lg:w-[8rem]"
                />
              </div>
            </div>
            <div class="mt-3">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c320a1b0411ecbe3880b62f1877f21db530284fffae0276f313a7eaf0c585527?apiKey=25748477bc014dd79dfb896b955120fd&"
                alt=""
                class="aspect-[0.26] fill-stone-300 w-[5px]"
              />
              <div class="flex flex-col px-2 mt-2.5 align-center">
                <h2
                  class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold text-center"
                >
                  Piket
                </h2>
                <p class="text-sm md:text-base lg:text-lg xl:text-xl mt-4 text-base text-center">
                  Senin-Jumat (08.00-17.00)<br />Sabtu (08.00-11.00)
                </p>
              </div>
            </div>
          </article>
        </div>
        <!-- block 3 -->
        <div
          class="flex flex-col w-full max-md:w-full items-center justify-center px-4"
        >
          <article
            class="flex flex-col grow items-center w-full justify-start max-md:mt-10"
          >
            <div class="flex items-center justify-center w-full h-auto">
              <div
                class="rounded-full bg-[#D5DECD] flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Meeting.png') }}"
                  alt="Meeting Icon"
                  class="w-2/4 md:w-[5rem] lg:w-[8rem]"
                />
              </div>
            </div>
            <div class="mt-3">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3cbd3991234f388eecc316cdd85462d370e925a87973b174e9d7e3df3f7cec93?apiKey=25748477bc014dd79dfb896b955120fd&"
                alt=""
                class="aspect-[0.26] fill-stone-300 w-[5px]"
              />
              <div class="flex flex-col px-2 mt-2.5 align-center">
                <h2
                  class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold text-center"
                >
                  Rapat
                </h2>
                <p class="text-sm md:text-base lg:text-lg xl:text-xl mt-4 text-base text-center">
                  Update dan evaluasi kinerja setiap anggota
                </p>
              </div>
            </div>
          </article>
        </div>
        <!-- block 4-->
        <div
          class="flex flex-col w-full max-md:w-full items-center justify-center px-4"
        >
          <article
            class="flex flex-col grow items-center w-full justify-start max-md:mt-10"
          >
            <div class="flex items-center justify-center w-full h-auto">
              <div
                class="rounded-full bg-[#D5DECD] flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Pengajuan jasa.png') }}"
                  alt="Pengajuan Jasa Icon"
                  class="w-2/4 md:w-[5rem] lg:w-[8rem]"
                />
              </div>
            </div>
            <div class="mt-3">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3cbd3991234f388eecc316cdd85462d370e925a87973b174e9d7e3df3f7cec93?apiKey=25748477bc014dd79dfb896b955120fd&"
                alt=""
                class="aspect-[0.26] fill-stone-300 w-[5px]"
              />
              <div class="flex flex-col px-2 mt-2.5 align-center">
                <h2
                  class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold text-center"
                >
                  Pengajuan jasa
                </h2>
                <p class="text-sm md:text-base lg:text-lg xl:text-xl mt-4 text-base text-center">
                  Pengajuan jasa dari pihak UMN Medical Center
                </p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
  </div>
  <!--section program kerja unggulan-->
  <section
    class="flex flex-col items-center py-16 px-8 bg-teal-950 max-md:px-5 max-md:mt max-md:max-w-full"
  >
    <h2
      class="text-2xl lg:text-3xl xl:text-4xl font-bold text-stone-300 mb-4 h-full items-center"
    >
      Program Kerja Unggulan
    </h2>
    <div class="self-stretch mt-2 max-md:max-w-full">
      <div
        class="grid grid-cols-1 md:grid-cols-4 gap-5 max-md:grid-cols-2 max-md:gap-5 justify-center items-start"
      >
        <!-- block 1 -->
        <div class="flex flex-col w-full max-md:w-full px-4">
          <article
            class="flex flex-col justify-center text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
          >
            <div class="flex items-center justify-center w-full h-full">
              <div
                class="rounded-full bg-[#D5DECD] flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Apresiasi.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[5rem] lg:w-[8rem]"
                />
              </div>
            </div>
            <div class="flex gap-5 mt-9">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2211b0600f27fdc92a892a94d1e7cbb60c778f076cc64eb185dd4e02cc818d8?apiKey=25748477bc014dd79dfb896b955120fd&"
                alt=""
                class="shrink-0 my-auto aspect-[0.28] fill-stone-300 w-[5px]"
              />
              <h3 class="flex-auto text-lg md:text-lg lg:text-xl xl:text-2xl">
                Apresiasi
              </h3>
            </div>
            <div
              class="shrink-0 mt-4 h-0.5 bg-zinc-200"
              aria-hidden="true"
            ></div>
          </article>
        </div>
        <!-- block 2 -->
        <div class="flex flex-col w-full max-md:w-full px-4">
          <article
            class="flex flex-col justify-center text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
          >
            <div class="flex items-center justify-center w-full h-full">
              <div
                class="rounded-full bg-[#D5DECD] flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Identitas.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[5rem] lg:w-[8rem]"
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
                <h3
                  class="text-lg md:text-lg lg:text-xl xl:text-2xl self-center w-full"
                >
                  Identity
                </h3>
                <div
                  class="shrink-0 mt-4 h-0.5 bg-zinc-200"
                  aria-hidden="true"
                ></div>
              </div>
            </div>
            <p class="mt-5 text-sm md:text-base lg:text-lg xl:text-xl text-center text-white break-words">
              Kartu tanda pengenal untuk anggota UMN Medical Center
            </p>
          </article>
        </div>
        <!-- block 3 -->
        <div class="flex flex-col w-full max-md:w-full px-4">
          <article
            class="flex flex-col text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
          >
            <div class="flex items-center justify-center w-full h-full">
              <div
                class="rounded-full bg-[#D5DECD] flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/alive.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[5rem] lg:w-[8rem]"
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
                <h3
                  class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold text-cyan-200"
                >
                  Alive
                </h3>
                <p class="mt-0 text-xl">Skin Health</p>
                <div
                  class="shrink-0 mt-3 h-0.5 bg-zinc-200"
                  aria-hidden="true"
                ></div>
                <p class="mt-4 text-sm md:text-base lg:text-lg xl:text-xl text-base text-center">
                  Kegiatan tahunan yang membahas tentang kesehatan
                </p>
              </div>
            </div>
          </article>
        </div>
        <!-- block 4 -->
        <div class="flex flex-col w-full max-md:w-full px-4">
          <article
            class="flex flex-col text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
          >
            <div class="flex items-center justify-center w-full h-full">
              <div
                class="rounded-full bg-[#D5DECD] flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Cek kesehatan.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[5rem] lg:w-[8rem]"
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
                <h3
                  class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold text-cyan-200"
                >
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
      <div
        class="grid grid-cols-1 md:grid-cols-4 gap-5 max-md:grid-cols-2 max-md:gap-5 justify-center items-start"
      >
        <div
          class="flex flex-col w-full max-md:w-full px-4 md:col-start-2 md:col-span-1"
        >
          <article
            class="flex flex-col text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
          >
            <div class="flex items-center justify-center w-full h-full">
              <div
                class="rounded-full bg-[#D5DECD] flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Pelatihan civitas umn.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[5rem] lg:w-[8rem]"
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
                  class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold text-cyan-200 max-w-[240px] break-words"
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
        <div class="flex flex-col w-full max-md:w-full px-4">
          <article
            class="flex flex-col text-2xl font-bold text-center text-stone-300 max-md:mt-10 w-full max-w-64"
          >
            <div class="flex items-center justify-center w-full h-full">
              <div
                class="rounded-full bg-[#D5DECD] flex justify-center items-center w-[min(100%,219px)] aspect-square"
              >
                <img
                  src="{{ asset('assets/proker/Bonding.png') }}"
                  alt="Pelatihan Icon"
                  class="w-2/4 md:w-[5rem] lg:w-[8rem]"
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
                <h3
                  class="text-lg md:text-lg lg:text-xl xl:text-2xl font-bold text-cyan-200 max-w-[240px] break-words"
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

@endsection
