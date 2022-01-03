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
        <div class="w-full my-7">
            <label class="text-3xl font-bold text-bold" for="cus_name">Info</label>
            <p class="font-semibold text-justify my-3" style="text-indent: 0.5in;">Teknologi Labolatorium Medik atau pranata laboratorium adalah bagian dari profesi di bidang kesehatan. Selama ini masyarakat lebih mengenal dokter, perawat, bidan, apoteker. Sedangkan Teknologi Labolatorium Medik jarang dikenal.  Seorang medik harus memiliki ketrampilan dan tanggung jawab yang tinggi dalam pemeriksaan sampel. Hal ini berhubungan dengan adanya risiko yang fatal jika terjadi kesalahan.</p>
            <p class="font-semibold text-justify mb-3" style="text-indent: 0.5in;">Teknologi Labolatorium Medik juga berati profesi yang bekerja pada sarana kesehatan yang melaksanakan pelayanan pemeriksaan, pengukuran, penetapan, dan pengujian terhadap bahan yang berasal dari manusia atau bahan bukan berasal dari manusia untuk penentuan jenis penyakit, penyebab penyakit, kondisi kesehatan atau faktor-faktor yang dapat berpengaruh pada kesehatan perorangan dan masyarakat.Sarana kesehatan ini berbentuk Laboratorium Kesehatan seperti Laboratorium Patologi Klinik yang memeriksa sampel berupa cairan2 tubuh manusia seperti darah, sputum, faeces, urine, liquor cerebro spinalis (cairan otak), dan lain-lain untuk mendapatkan data atau hasil sebagai penegakan diagnosa terhadap suatu penyakit. Cakupannya juga luas meliputi pemeriksaan mikrobiologi (bakteri), parasitologi (fungi, protozoa, cacing) hematologi (sel-sel darah serta plasma), imunologi (antigen, antibodi), kimia klinik (hormon, enzim, glukosa, lipid, protein, elektrolit, dll).</p>
            <p class="font-semibold text-justify mb-3" style="text-indent: 0.5in;">Teknologi Labolatorium Medik juga ada yang bekerja di Laboratorium Patologi Anatomi yang memeriksa sampel berupa jaringan hasil operasi (histopatologi). Selain itu Banyak pula yang bekerja di Industri makanan dan minuman, obat serta kosmetik karena dalam kurikulum pengajarannya terdapat mata kuliah Kimia Analitik, Kimia Makanan dan Minuman, serta Toksikologi.</p>
            <p class="font-semibold text-justify mb-3" style="text-indent: 0.5in;">Semua cakupan Laboratorium Kesehatan yang disebut diatas berlaku baik milik pemerintah maupun swasta. kebanyakan orang slah mengartikan Teknologi Labolatorium Medik srbagai seorang dokter, tapi sebenertan tugas seorang medik lebih rinci dan menjurus pada diagnosa penyakit yang dibuktikan dengan diagnosa Laboraturium.</p>
        </div>

        <div class="w-full my-7">
            <label class="text-3xl font-bold text-bold" for="cus_name">Teknologi Labolatorium Medik ini didukung oleh:</label>
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