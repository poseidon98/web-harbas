@extends('layout/template')
@section('content')
<main class="mt-20">
    <div class="flex flex-wrap overflow-hidden px-10">
        <div class="w-full mt-20 xl:w-1/2">
            <p class="text-5xl pt-10 font-bold">Farmasi Kesehatan</p>
            <p class="text-3xl pt-7 xl:mr-28 ">Buat kamu yang mau mendalami
                bidang Rumah Sakit, Laboratorium Forensik
                dan Puskesmas ini menjadi solusinya.</p>
            <img src="/image/Android-1.jpg" class="ml-10 my-7 hidden xl:block" width="23" height="128" alt="">
        </div>
        <div class="w-full grid justify-items-center items-center xl:w-1/2">
            <img src="/image/Health _Flatline 1.png" class="mt-4" width="500" height="500" alt="">
        </div>
        <div class="w-full my-7">
            <label class="text-3xl font-bold text-bold" for="cus_name">Info</label>
            <p class="font-semibold text-justify my-3" style="text-indent: 0.5in;">Perkembangan bidang Farmasi di Indonesia, menghendaki adanya tenaga tekhnis kefarmasian formal jenjang menengah yang mampu bekerja dalam proses produksi, distribusi, administrasi, maupun dalam penyuluhan kepada masyarakat dibidang farmasi.</p>
            <p class="font-semibold text-justify mb-3" style="text-indent: 0.5in;">Pengembangan tenaga kesehatan menuju Indonesia sehat 2010 menegaskan bahwa tenaga kesehatan profesional adalah tenaga kesehatan tingkat menengah yang sudah mempunyai keahlian dibidang kesehatan.</p>
            <p class="font-semibold text-justify mb-3" style="text-indent: 0.5in;">Perkembangan kebijakan pendidikan pemerintah c.q. Departemen Pendidikan Nasional yang mendorong pengembangan SMK, melalui pembentukan unit – unit SMK baru maupun penambahan siswa SMK.</p>
            <p class="font-semibold text-justify mb-3" style="text-indent: 0.5in;">Farmasi Kesehatan adalah cabang ilmu yang mempelajari tentang pembuatan sediaan farmasi yang baik. Sediaan farmasi dapat berupa obat, bahan obat, obat tradisional dan lain sebagainya.</p>
        </div>

        <div class="w-full my-7">
            <label class="text-3xl font-bold text-bold" for="cus_name">Propek Lulusan Farmasi:</label>
            <ol class="list-decimal px-5 py-3 font-semibold">
                <li>Asisten Apoteker pada instalasi Apotek, instansi Rumah Sakit baik pemerintah maupun swasta</li>
                <li>Tenaga penyuluhan kesehatan masyarakat di Puskesmas</li>
                <li>Tenaga tekhnisi di Industri Obat, Makanan, Minuman, Alat kesehatan dll</li>
                <li>Melanjutkan Pendidikan keperguruan Tinggi Negri maupun Swasta</li>
            </ol>
        </div>

        <div class="w-full my-7">
            <label class="text-3xl font-bold text-bold" for="cus_name">Farmasi Kesehatan ini didukung oleh :</label>
            <ol class="list-decimal px-5 py-3 font-semibold">
                <li>Guru-guru SMK Harapan Bangsa yang berkompeten</li>
                <li>Fasilitas yang memadai</li>
            </ol>
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
                <img src="/image/medicine 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-5 text-lg font-bold text-bold">Lab. Farmasi</p>
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

        <div class="w-full block justify-center text-center xl:flex my-7">

            <img src="/image/farmasi/fasilitas-1.jpg" class="w-auto mx-2 my-2 h-60 inline xl:block" alt="">
            <img src="/image/farmasi/fasilitas-2.jpg" class="w-auto mx-2 my-2 h-60 inline xl:block" alt="">
            <img src="/image/farmasi/fasilitas-3.jpg" class="w-auto mx-2 my-2 h-60 inline xl:block" alt="">

        </div>

        <div class="w-full flex justify-center xl:justify-start">
            <a href="/form-pendaftaran" class="rounded text-white my-5 py-1 px-6 green">Daftar Online</a>
        </div>
    </div>
</main>
@endsection