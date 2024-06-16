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
            class="flex gap-5 mt-16 mb-16 max-md:flex-col max-md:gap-0 h-full max-h-[1900px]"
          >
            <!-- block 1 -->
            <div class="flex flex-col w-3/12 max-md:w-full">
              <article class="flex flex-col grow items-start max-md:mt-10">
                <div class="flex items-center justify-center w-full h-full">
                  <div
                    class="rounded-full bg-green-200 flex justify-center items-center w-[min(100%,219px)] aspect-square"
                  >
                    <img
                      src="https://cdn.builder.io/api/v1/image/assets/TEMP/89575ca84148fba5bebb81ec96c1191c22a96db075ff811dff9e693b0abdf28b?apiKey=25748477bc014dd79dfb896b955120fd&"
                      alt="Pelatihan Icon"
                      class="w-3/4 md:w-[219px]"
                    />
                  </div>
                </div>
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/c320a1b0411ecbe3880b62f1877f21db530284fffae0276f313a7eaf0c585527?apiKey=25748477bc014dd79dfb896b955120fd&"
                  alt=""
                  class="mt-3 aspect-[1.02] fill-stone-300 w-[5px]"
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
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/c5eb3c6c7fe5946d8ed2c5ed350176bb9143cc4aaf701bd0554eded30e6d655f?apiKey=25748477bc014dd79dfb896b955120fd&"
                  alt="Piket Icon"
                  class="max-w-full aspect-[1.02] fill-stone-300 w-[229px]"
                />
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
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/06f8fccbf65a70de905c2983cd9e7e89946b1cc7d5e436cbe2ae4ed27dd99cfd?apiKey=25748477bc014dd79dfb896b955120fd&"
                  alt="Rapat Icon"
                  class="max-w-full aspect-[1.02] fill-stone-300 w-[229px]"
                />
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
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/337f2abf32822f368eda89863a848e5d7eeb8200a2753aae33e962b0329bdf38?apiKey=25748477bc014dd79dfb896b955120fd&"
                  alt="Pengajuan Jasa Icon"
                  class="max-w-full aspect-[1.02] fill-stone-300 w-[229px]"
                />
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
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/3d7f3ba191d85acec8a3b395bc9784d36743d037ae89156af8b91a78c1868ddd?apiKey=25748477bc014dd79dfb896b955120fd&"
                    alt="Apresiasi Icon"
                    class="max-w-full aspect-[1.02] fill-stone-300 w-[full]"
                  />
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
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/3594194a8f22609f2a909c050b5fcd7a073e7c24c7371fbc67fca507ef24e04f?apiKey=25748477bc014dd79dfb896b955120fd&"
                    alt="Identity Icon"
                    class="max-w-full aspect-[1.02] fill-stone-300 w-[full]"
                  />
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
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/07e54ca83b992d3a45658c011c6a6ce8a3603578255956bd2eaf63f5587e2259?apiKey=25748477bc014dd79dfb896b955120fd&"
                    alt="Identity Icon"
                    class="max-w-full aspect-[1.02] fill-stone-300 w-[full]"
                  />
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
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/70f98d16aa970c9e5aad248583f29d08b14ab556c0f4e14866a98366c31e884f?apiKey=25748477bc014dd79dfb896b955120fd&"
                    alt="Cek Kesehatan Icon"
                    class="max-w-full aspect-[1.02] fill-stone-300 w-[full]"
                  />
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
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/b49268344968eb3b358858af26c885bb6072c37fc1c0504afb8bd9ca05c7e0d1?apiKey=25748477bc014dd79dfb896b955120fd&"
                    alt="Pelatihan Medis Civitas UMN Icon"
                    class="max-w-full aspect-[1.02] fill-stone-300 w-[full]"
                  />
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
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/de7db8de2069ee0b661d02216be809384cd2139399f886ea88d7b9bff6a2b970?apiKey=25748477bc014dd79dfb896b955120fd&"
                    alt="Bonding Icon"
                    class="max-w-full aspect-[1.02] fill-stone-300 w-[full]"
                  />
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
