@extends('layout/template')
@section('content')
<main class="mt-20">
    <div class="w-full flex flex-wrap px-3 xl:px-10">
        <div class="w-full mt-20 xl:w-1/2">
            <p class="text-4xl xl:text-5xl pt-10 font-bold">Struktur Dewan Guru <br>
                SMK Harapan Bangsa
                Depok</p>
            <p class="text-3xl pt-7 xl:mr-28 ">Berikut Struktur dan para guru yang mengajar ada SMK Harapan Bangsa Depok.</p>
            <img src="/image/Android-1.jpg" class="hidden xl:block ml-10 my-7" width="23" height="128" alt="">
        </div>
        <div class="w-full grid justify-items-center items-center xl:w-1/2">
            <img src="/image/Teacher_Outline 1.png" class="mt-4" width="500" height="500" alt="">
        </div>

        <div class="w-full mb-14">
            <img src="/image/Struktr Gambar.png" alt="">
        </div>

        <div class="w-full">
            <p class="text-3xl font-bold text-bold">Guru</p>
        </div>

        <!-- Daftar Guru -->
        <div class="flex my-5 w-full flex-wrap justify-center">
            @foreach ($guru as $data)
            <!-- Card -->
            <div class="w-full flex justify-center md:w-1/2 xl:w-1/4">
                <div class="w-72 h-28 border-gray-300 flex items-center shadow-md rounded-3xl mx-2 my-5 border-2">
                    <div class="w-1/4">
                        <img src="/image/user.png" class="inline mx-2" alt="" width="60" height="60">
                    </div>
                    <div class="w-3/4 my-5 mx-3">
                        <div class="divide-y-2 divide-gray-300 mr-5">
                            <p class="text-base font-bold text-bold">{{$data->nama_guru}}</p>
                            <p class="text-sm font-bold">{{$data->mapel}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>



    </div>
</main>
@endsection
