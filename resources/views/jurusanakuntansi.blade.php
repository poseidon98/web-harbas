@extends('layout/template')
@section('content')
<main class="mt-20">
    <div class="flex flex-wrap overflow-hidden px-10">
        <div class="w-full mt-20 xl:w-1/2">
            <p class="text-5xl pt-10 font-bold">Akuntansi Komputer</p>
            <p class="text-3xl pt-7 xl:mr-28 ">Buat kamu yang mau mendalami
                keuangan dan administrasi kantor ini
                menjadi solusinya</p>
            <img src="/image/Android-1.jpg" class="ml-10 hidden xl:block my-7" width="23" height="128" alt="">
        </div>
        <div class="w-full grid justify-items-center items-center xl:w-1/2">
            <img src="/image/Online report_Outline 1.png" class="mt-4" width="500" height="500" alt="">
        </div>

        <div class="w-full mb-14">
            <label class="text-3xl font-bold text-bold text-gray-00" for="cus_name">Fasilitas</label>
        </div>

        <div class=" w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/analytics 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">Lab. Komp. Bisnis</p>
            </div>
        </div>

        <div class=" w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/accounting (1) 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">Lab. Komp. Akuntansi</p>
            </div>
        </div>

        <div class=" w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/projector.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">LCD Proyektor</p>
            </div>
        </div>

        <div class=" w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/hotspot.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">Area Hotspot</p>
            </div>
        </div>

        <div class=" w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/chair.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">Kursi Meja Lipat</p>
            </div>
        </div>

        <div class=" w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="block xl:flex items-center my-3">
                <img src="/image/air-conditioner.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">AC</label>
            </div>
        </div>

        <div class="w-full block justify-center text-center xl:flex my-7">

            <img src="/image/akuntansi/akun-1.jpg" class="inline xl:block w-auto mx-2 my-2 h-60" alt="">
            <img src="/image/akuntansi/akun-2.jpg" class="inline xl:block w-auto mx-2 my-2 h-60" alt="">

        </div>

        <div class="w-full flex justify-center xl:justify-start">
            <a href="/form-pendaftaran" class="rounded text-white my-5 py-1 px-6 green">Daftar Online</a>
        </div>
    </div>
</main>
@endsection