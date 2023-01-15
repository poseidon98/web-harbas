@extends('layout/template')
@section('content')
    <main class="mt-20">
        <div class="flex flex-wrap overflow-hidden px-10">
            <div class="w-full xl:w-1/2">
                <div class="text-4xl xl:text-5xl pt-10 font-bold">Prestasi</div>
                <div class="text-4xl xl:text-5xl pt-5 font-bold">SMK Harapan Bangsa</div>
                <div class="text-4xl xl:text-5xl pt-5 font-bold">Depok</div>
                <p class="text-3xl pt-7 xl:mr-28 ">SMK Harapan Bangsa Memiliki beberapa Prestasi loh!! <br>
                    Lihat..</p>
                <img src="/image/Android-1.jpg" class="ml-10 hidden lg:block my-7" width="23" height="128" alt="">
            </div>
            <div class="w-full grid justify-items-center items-center xl:w-1/2">
                <img src="/image/Winner _Outline (2) 1.png" class="mt-4" width="500" height="500" alt="">
            </div>

            <!-- component -->
            <div class="flex mt-16 w-full items-center text-center justify-center">
                <div class="grid grid-cols-1 gap-20 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                    <!-- 1 card -->
                    @foreach ($prestasi as $item)
                        <div class="relative bg-white py-6 px-6 w-56 h-56 rounded-3xl my-4 shadow-xl ">
                            @if ($item->juara == 1)
                                <img src="/image/gold 1.png" class="inline xl:mt-3" width="80" height="80" alt="">
                            @elseif($item->juara == 2)
                                <img src="/image/second-place 1.png" class="inline xl:mt-3" width="80" height="80" alt="">
                            @elseif($item->juara == 3)
                                <img src="/image/bronze 1.png" class="inline xl:mt-3" width="80" height="80" alt="">
                            @endif

                            <p class="pt-3 font-semibold text-lg">Juara {{ $item->juara }} <br> {{ $item->nama_lomba }}
                                <br> {{ $item->tahun }}
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>


        </div>
    </main>
@endsection
