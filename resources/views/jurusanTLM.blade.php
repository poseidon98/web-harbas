@extends('layout/template')
@section('content')
<main class="mt-20">
    <div class="flex flex-wrap overflow-hidden px-10">
        <div class="w-full mt-20 xl:w-1/2">
            <p class="text-5xl pt-10 font-bold">Teknologi Laboratorium
                Medik (Analis Kesehatan)</p>
            <p class="text-3xl pt-7 xl:mr-28 ">Buat kamu yang mau mendalami
                bidang Laboratorium yan berhubungan
                dengan kesehatan ini menjadi solusinya.</p>
            <img src="/image/Android-1.jpg" class="ml-10 my-7 hidden xl:block" width="23" height="128" alt="">
        </div>
        <div class="w-full grid justify-items-center items-center xl:w-1/2">
            <img src="/image/Laboratory Analyst_Two Color 1.png" class="mt-4" width="500" height="500" alt="">
        </div>

        <div class="w-full mb-14">
            <label class="text-3xl font-bold text-bold text-gray-00" for="cus_name">Fasilitas</label>
        </div>

        <div class=" w-1/2 block xl:justify-start justify-center text-center xl:flex xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/lab-tool 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">Lab. Kimia</p>
            </div>
        </div>

        <div class=" w-1/2 block xl:justify-start justify-center text-center xl:flex xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/microscope 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">Lab. Analis Kesehatan</p>
            </div>
        </div>

        <div class=" w-1/2 block xl:justify-start justify-center text-center xl:flex xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/chair.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">Kursi Meja Lipat</p>
            </div>
        </div>

        <div class=" w-1/2 block xl:justify-start justify-center text-center xl:flex xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/hotspot.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">Area Hotspot</p>
            </div>
        </div>

        <div class=" w-1/2 block xl:justify-start justify-center text-center xl:flex xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/laboratory 3.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">Peralatan Praktek</p>
            </div>
        </div>

        <div class=" w-1/2 block xl:justify-start justify-center text-center xl:flex xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/air-conditioner.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">AC</p>
            </div>
        </div>

        <div class=" w-1/2 block xl:justify-start justify-center text-center xl:flex xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/projector.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">LCD Proyektor</p>
            </div>
        </div>

        <div class="w-full block text-center justify-center xl:flex my-7">

            <img src="/image/TLM/tlm1.jpg" class="w-auto mx-2 my-2 h-60 inline xl:block" alt="">
            <img src="/image/TLM/tlm2.jpg" class="w-auto mx-2 my-2 h-60 inline xl:block" alt="">
            <img src="/image/TLM/tlm3.jpeg" class="w-auto mx-2 my-2 h-60 inline xl:block" alt="">

        </div>

        <div class="w-full flex justify-center xl:justify-start">
            <a href="/form-pendaftaran" class="rounded text-white my-5 py-1 px-6 green">Daftar Online</a>
        </div>
    </div>
</main>
@endsection