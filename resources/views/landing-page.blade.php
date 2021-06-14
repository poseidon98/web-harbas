@extends('layout/template')
@section('content')
    <main class="mt-20">
        <div class="w-full flex flex-wrap px-10">
            <div class="w-full xl:w-1/2">
                <div class="text-4xl xl:text-5xl pt-10 font-bold">SMK</div>
                <div class="text-4xl xl:text-5xl pt-5 font-bold">Harapan Bangsa</div>
                <div class="text-4xl xl:text-5xl pt-5 font-bold">Depok</div>
                <p class="pt-7 text-lg">SMK Harapan Bangsa didirikan dibawah naungan Yayasan Reste Nur Insani yang merupakan
                    institusi pendidikan formal mempunyai visi misi dan strategi baru dalam proses pembelajaran.</p>
                <p class="pt-5 text-lg">Sebagai institusi pendidikan berusaha menyelaraskan kualitas pendidikan dengan
                    kebutuhan dunia kerja dalam pembentukan sumber daya manusia yang unggul.</p>
            </div>
            <div class="relative hidden xl:block lg:block w-1/2 justify-end pl-10">
                <img src="/image/School_Monochromatic.png" width="500" height="500" alt="">

                <img class="ml-36" src="/image/Android-1.jpg" width="23" height="128" alt="">

            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-1/3 pl-7 ml-10 mr-28 hidden xl:block">
                <img src="/image/Checklist_Flatline.png" class="items-center" width="300" height="300" alt="">

                <img class="ml-14" src="/image/Android-1.jpg" width="23" height="128" alt="">
            </div>

            <div class="w-full my-5 xl:w-1/2 px-7">
                <!-- card -->
                <p class="xl:ml-40 font-semibold text-2xl">Pendaftaran Sekolah</p>
                <div class="w-full relative">
                    <div class="py-6 px-6 rounded-2xl shadow-lg">
                        <div class="flex flex-wrap">
                            <p class="w-1/2 text-xl font-semibold my-2 inline-block">Pendaftaran Online</p>

                            <div class="relative w-1/2 flex justify-end py-2">
                                <a href="/form-pendaftaran"
                                    class="green px-5 py-2 text-xs flex items-center font-semibold mx-10 text-white rounded">Daftar</a>
                            </div>
                        </div>
                        <div class="border-t-2"></div>

                        <div class="flex justify-between">
                            <p class="text-xl font-semibold my-2">Pendaftaran Langsung</p>
                            <div class="relative w-1/2 flex justify-end py-2">
                                <a href="/profile"><u>Lihat Info Sekolah</u></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex">
            <div class="flex w-1/2 ml-10 items-center">
                <p class="text-3xl font-semibold">Bidang Keahlian</p>
            </div>
            <div class="w-1/2 flex justify-end text-lg font-bold">
                <img src="/image/Android1.jpg" width="106" height="96" alt="">
            </div>
        </div>

        <div class="flex flex-wrap justify-center xl:justify-start">
            <!-- component -->
            <div class="xl:ml-10 flex items-center text-center justify-center">
                <div
                    class="grid justify-center grid-cols-1 gap-20 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-5">
                    <!-- 1 card -->
                    <a href="/form-JurusanTKJ">
                        <div class="relative bg-white py-6 px-6 w-56 h-56 rounded-3xl my-4 shadow-xl hover:bg-gray-100">
                            <img src="/image/dns.svg" class="inline xl:mt-3" width="80" height="80" alt="">
                            <p class="pt-3 font-semibold text-lg">Teknik Komputer Jaringan</p>
                        </div>
                    </a>

                    <a href="/form-JurusanAkuntansi">
                        <!-- 2 card -->
                        <div class="relative bg-white py-6 px-6 w-56 h-56 rounded-3xl my-4 shadow-xl hover:bg-gray-100">
                            <img src="/image/accounting.svg" class="inline xl:mt-3" width="80" height="80" alt="">
                            <p class="pt-3 font-semibold text-lg">Akuntansi <br> Komputer</p>
                        </div>
                    </a>

                    <a href="/form-JurusanFarmasi">
                        <!-- 3 card -->
                        <div class="relative bg-white py-6 px-6 w-56 h-56 rounded-3xl my-4 shadow-xl hover:bg-gray-100">
                            <img src="/image/mortar.svg" class="inline xl:mt-3" width="80" height="80" alt="">
                            <p class="pt-3 font-semibold text-lg">Farmasi <br> Kesehatan</p>
                        </div>
                    </a>

                    <a href="/form-JurusanTLM">
                        <!-- 4 card -->
                        <div class="relative bg-white py-6 px-6 w-56 h-56 rounded-3xl my-4 shadow-xl hover:bg-gray-100">
                            <img src="/image/research.svg" class="inline xl:mt-3" width="80" height="80" alt="">
                            <p class="pt-3 font-semibold text-lg">Teknologi Laboratotium Medik</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full invisible xl:visible lg:visible">
            <div class="flex flex-wrap mr-52 justify-end">
                <img class="ml-14" src="/image/Android-1.jpg" class="" width="23" height="128" alt="">
            </div>
            <div class="flex flex-wrap justify-end mr-36">
                <p class="text-3xl font-semibold text-right">Kesiswaan</p>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full hidden xl:block xl:w-1/3">
                <img src="/image/Winners_Flatline.png" width="360" height="360" alt="">
                <img class="ml-24" src="/image/Android-1.jpg" class="" width="23" height="128" alt="">
            </div>
            <div class="w-full xl:w-2/3">
                <h1 class="text-center xl:mt-10 font-bold text-2xl">Ekstrakulikuler</h1>
                <div class="flex items-center text-center justify-center">
                    <div class="grid gap-10 grid-cols-3 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-5">
                        <!-- 1 card -->
                        <div class="relative bg-white py-6 px-6 w-35 h-35">
                            <img src="/image/football-player.svg" class="inline xl:mt-3" width="55" height="55" alt="">
                            <p class="pt-3 font-bold text-sm">Futsal</p>
                        </div>

                        <div class="relative bg-white py-6 px-6 w-35 h-35">
                            <img src="/image/pencak-silat.svg" class="inline xl:mt-3" width="55" height="55" alt="">
                            <p class="pt-3 font-bold text-sm">Pencak Silat</p>
                        </div>

                        <div class="relative bg-white py-6 px-6 w-35 h-35">
                            <img src="/image/taekwondo.svg" class="inline xl:mt-3" width="55" height="55" alt="">
                            <p class="pt-3 font-bold text-sm">Taekwondo</p>
                        </div>

                        <div class="relative bg-white py-6 px-6 w-35 h-35">
                            <img src="/image/kabuki.svg" class="inline xl:mt-3" width="55" height="55" alt="">
                            <p class="pt-3 font-bold text-sm">Tari</p>
                        </div>

                        <div class="relative bg-white py-6 px-6 w-35 h-35">
                            <img src="/image/royal-guard.svg" class="inline xl:mt-3" width="55" height="55" alt="">
                            <p class="pt-3 font-bold text-sm">Paskibra</p>
                        </div>

                        <div class="relative bg-white py-6 px-6 w-35 h-35">
                            <img src="/image/teamwork.svg" class="inline xl:mt-3" width="55" height="55" alt="">
                            <p class="pt-3 font-bold text-sm">OSIS</p>
                        </div>

                        <div class="relative bg-white py-6 px-6 w-35 h-35">
                            <img src="/image/team.svg" class="inline xl:mt-3" width="55" height="55" alt="">
                            <p class="pt-3 font-bold text-sm">TKJ Club</p>
                        </div>

                        <div class="relative bg-white py-6 px-6 w-35 h-35">
                            <img src="/image/uniform.svg" class="inline xl:mt-3" width="55" height="55" alt="">
                            <p class="pt-3 font-bold text-sm">Pramuka</p>
                        </div>

                        <div class="relative bg-white py-6 px-6 w-35 h-35">
                            <img src="/image/choir.svg" class="inline xl:mt-3" width="55" height="55" alt="">
                            <p class="pt-3 font-bold text-sm">Paduan Suara</p>
                        </div>

                        <div class="relative bg-white py-6 px-6 w-35 h-35">
                            <img src="/image/tambourine.svg" class="inline xl:mt-3" width="55" height="55" alt="">
                            <p class="pt-3 font-bold text-sm">Hadroh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-wrap">
            <h4 class="ml-7 text-2xl font-bold">Pendapat Alumni</h4>
            <div class="flex flex-wrap my-5 w-full">
                <div class="w-full md:1/2 lg:w-1/3 xl:w-1/3">
                    <div class="mx-7 my-5 shadow-md rounded-3xl border justify-items-center text-center h-48 w-auto">
                        <img src="/image/user.png" class="inline mt-3" width="64" height="64" alt="">
                        <p class="text-lg">“Guru Baik, dan membina dengan baik”</p>
                        <p class="text-sm mt-3 mb-5">Ali Imran</p>
                    </div>
                </div>

                <div class="w-full md:1/2 lg:w-1/3 xl:w-1/3">
                    <div class="mx-7 my-5 shadow-md rounded-3xl border justify-items-center text-center h-48 w-auto">
                        <img src="/image/user.png" class="inline mt-3" width="64" height="64" alt="">
                        <p class="text-lg">“Memberikan lingkungan yang baik, serta guru yang friendly”</p>
                        <p class="text-sm mt-3 mb-5">Tegar Prasetyo</p>
                    </div>
                </div>

                <div class="w-full md:1/2 lg:w-1/3 xl:w-1/3">
                    <div class="mx-7 my-5 shadow-md rounded-3xl border justify-items-center text-center h-48 w-auto">
                        <img src="/image/user.png" class="inline mt-3" width="64" height="64" alt="">
                        <p class="text-lg">“Pembelajaran yang seru, jadi gampang di ingat”</p>
                        <p class="text-sm mt-3 mb-5">Zeta Adha</p>
                    </div>
                </div>
            </div>

            <div class="w-full text-center ml-7 mt-5">
                <h4 class="text-2xl font-bold">Kerja Sama</h4>
            </div>

            <div class="flex flex-wrap mx-7 my-5 w-full">
                <div class="carousel relative shadow-2xl w-full bg-white leading-normal tracking-normal">
                    <div class="carousel-inner relative overflow-hidden w-full">
                        <!--Slide 1-->
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true"
                            hidden="" checked="checked">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="h-full w-full text-white text-5xl flex justify-center items-center">
                                <div class="flex flex-wrap justify-center mx-7 my-5 w-full">
                                    <div class="flex justify-center items-center w-1/5">
                                        <img src="/image/pharos.png" class="inline" width="116" height="136" alt="">
                                    </div>
                                    <div class="flex justify-center items-center text-center w-1/5">
                                        <img src="/image/cropped-Logo-Kimia-Farma-Laboratorium-Klinik-1.png" class="inline"
                                            width="207" height="91" class="" alt="">
                                    </div>
                                    <div class="flex justify-center items-center text-center w-1/5">
                                        <img src="/image/18544481552013071901213823Apotek K-24.jpg" width="183" height="183"
                                            class="" alt="">
                                    </div>
                                    <div class="flex justify-center items-center text-center w-1/5">
                                        <img src="/image/download.png" width="227" height="98" class="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label for="carousel-3"
                            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2"
                            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 2-->
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                            hidden="">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="h-full w-full bg-orange-500 text-white text-5xl flex justify-center items-center">
                                <div class="flex flex-wrap justify-center mx-7 my-5 w-full">
                                    <div class=" flex justify-center items-center text-center w-1/5">
                                        <img src="/image/biznet_logo-1571886850.png" width="282" height="86" class=""
                                            alt="">
                                    </div>
                                    <div class=" flex justify-center items-center text-center w-1/5">
                                        <img src="/image/logo-nusanet-transparent.png" width="251" height="75" class=""
                                            alt="">
                                    </div>
                                    <div class=" flex justify-center items-center text-center w-1/5">
                                        <img src="/image/LOGO_O-Academy-rgb.png" width="200" height="91" class="" alt="">
                                    </div>
                                    <div class=" flex justify-center items-center text-center w-1/5">
                                        <img src="/image/RHA_logo_1.png" width="143" height="147" class="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label for="carousel-1"
                            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-3"
                            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 3-->
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                            hidden="">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class=" h-full w-full text-white text-5xl flex justify-center items-center">
                                <div class="flex flex-wrap justify-center mx-7 my-5 w-full">
                                    <div class=" flex justify-center items-center text-center w-1/5">
                                        <img src="/image/13814801SMK-Bisa-Hebat.jpg" width="160" height="160" class=""
                                            alt="">
                                    </div>
                                    <div class=" flex justify-center items-center text-center w-1/5">
                                        <img src="/image/TKJ_kota_depok.jpeg" width="133" height="133" class="" alt="">
                                    </div>
                                    <div class=" flex justify-center items-center text-center w-1/5">
                                        <img src="/image/mikrotik.jpeg" width="289" height="149" class="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label for="carousel-2"
                            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1"
                            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators">
                            <li class="inline-block mr-3">
                                <label for="carousel-1"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-2"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-3"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>

            <!-- <div class="flex flex-wrap mx-7 my-5 w-full">
                                                <div class="w-full flex justify-center items-center xl:w-1/5">
                                                    <img src="/image/pharos.png" class="inline" width="116" height="136" alt="">
                                                </div>
                                                <div class="w-full flex justify-center items-center text-center xl:w-1/5">
                                                    <img src="/image/cropped-Logo-Kimia-Farma-Laboratorium-Klinik-1.png" class="inline" width="207" height="91" class="" alt="">
                                                </div>
                                                <div class="w-full flex justify-center items-center text-center xl:w-1/5">
                                                    <img src="/image/18544481552013071901213823Apotek K-24.jpg" width="183" height="183" class="" alt="">
                                                </div>
                                                <div class="w-full flex justify-center items-center text-center xl:w-1/5">
                                                    <img src="/image/download.png" width="227" height="98" class="" alt="">
                                                </div>
                                                <div class="w-full flex justify-center items-center text-center xl:w-1/5">
                                                    <img src="/image/biznet_logo-1571886850.png" width="282" height="86" class="" alt="">
                                                </div>

                                                <div class="w-full flex justify-center items-center text-center xl:w-1/5">
                                                    <img src="/image/logo-nusanet-transparent.png" width="251" height="75" class="" alt="">
                                                </div>
                                                <div class="w-full flex justify-center items-center text-center xl:w-1/5">
                                                    <img src="/image/LOGO_O-Academy-rgb.png" width="200" height="91" class="" alt="">
                                                </div>
                                                <div class="w-full flex justify-center items-center text-center xl:w-1/5">
                                                    <img src="/image/RHA_logo_1.png" width="143" height="147" class="" alt="">
                                                </div>
                                                <div class="w-full flex justify-center items-center text-center xl:w-1/5">
                                                    <img src="/image/13814801SMK-Bisa-Hebat.jpg" width="160" height="160" class="" alt="">
                                                </div>
                                                <div class="w-full flex justify-center items-center text-center xl:w-1/5">
                                                    <img src="/image/TKJ_kota_depok.jpeg" width="133" height="133" class="" alt="">
                                                </div>
                                                <div class="w-full flex justify-center items-center text-center xl:w-1/5">
                                                    <img src="/image/mikrotik.jpeg" width="289" height="149" class="" alt="">
                                                </div>
                                            </div> -->


    </main>
    <footer class="w-full blue">
        <div class="flex flex-wrap mx-7 text-white">
            <div class="w-full my-7 text-justify xl:w-1/3">
                <p class="text-2xl xl:font-semibold">SMK Harapan Bangsa</p>
                <p class="mt-2 text-lg xl:font-semibold">Jl. Komjen Pol. M. Jasin ( Akses UI ) No. 89
                    Kelapa Dua Cimanggis, Depok
                    Jawa Barat 16951</p>
                <p class="mt-2 text-lg xl:font-semibold">Telp. 021 ‒ 87720786 | Fax. 021- 87721016</p>
            </div>

            <div class="w-full my-7 text-center xl:w-1/3">
                <p></p>
                <p></p>
            </div>

            <div class="w-full my-7 grid place-items-end text-right xl:w-1/3">
                <p class="text-lg xl:font-semibold">©2017. SMK HARAPAN BANGSA.<br />
                    All rights reserved.</p>
            </div>
        </div>
    </footer>
@endsection
