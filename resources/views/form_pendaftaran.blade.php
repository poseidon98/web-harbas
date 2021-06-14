@extends('layout/template')
@section('content')
<main class="mt-20">
    <div class="w-full flex flex-wrap px-10">
        <div class="w-full xl:w-1/2">
            <P class="text-5xl pt-10 font-bold">Pendaftaran Online <br>
                SMK Harapan Bangsa <br>
                Depok</P>
            <p class="pt-7 text-lg">Hallo para calon siswa SMK Harapan Bangsa Depok, Isi dengan benar dan jangan sampai salah ya...</p>
            <img src="/image/Android-1.jpg" class="ml-10 my-7 hidden xl:block" width="23" height="128" alt="">
        </div>

        <div class="w-full grid justify-items-center items-center xl:w-1/2">
            <img src="/image/Checklist_Flatline.png" class="" width="300" height="300" alt="">
        </div>

        <form method="POST" action="/form-pendaftaran/add" enctype="multipart/form-data" class="w-full xl:max-w-3xl xl:pr-10">
            @csrf
            <div class="">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Alamat Email</label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="email" type="text" required="" placeholder="Email">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Nama Peseerta Didik</label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="nama_lengkap" type="text" required="" placeholder="Nama">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Jenis Kelamin </label>
                <label class="">
                    <input type="radio" name="jekel" value="Laki-laki">
                    <span class="text-sm">Laki-laki</span>
                </label>
                <label class="ml-2">
                    <input type="radio" name="jekel" value="Perempuan">
                    <span class="text-sm">Perempuan</span>
                </label>
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Program Keahlian Yang Dipilih </label>
                <label class="">
                    <input type="radio" name="jurusan" value="Analisis Kesehatan">
                    <span class="text-sm">Analisis Kesehatan</span>
                </label>
                <label class="ml-2">
                    <input type="radio" name="jurusan" value="Farmasi Kesehatan">
                    <span class="text-sm">Farmasi Kesehatan</span>
                </label>
                <label class="ml-2">
                    <input type="radio" name="jurusan" value="Akuntansi Komputer">
                    <span class="text-sm">Akuntansi Komputer</span>
                </label>
                <label class="ml-2">
                    <input type="radio" name="jurusan" value="Teknik Komputer Jaringan">
                    <span class="text-sm">Teknik Komputer Jaringan</span>
                </label>
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Tempat Tanggal Lahir</label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="tmpt_tgl_lahir" type="text" required="" placeholder="Contoh : Jakarta, 12-03-2003">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Agama</label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="agama" type="text" required="" placeholder="Agama">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Alamat Peserta Didik </label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="alamat" type="text" required="" placeholder="Alamat">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Sekolah Asal (SMP/MTS/Sederajat) </label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="sekolah_asal" type="text" required="" placeholder="SMP">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Nama Ayah </label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="nama_ayah" type="text" required="" placeholder="Nama Ayah">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Nama Ibu </label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="nama_ibu" type="text" required="" placeholder="Nama Ibu">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Pekerjaan Orang Tua </label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="pekerjaan_ortu" type="text" required="" placeholder="Contoh : Karyawan, Guru, dll">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Nama Wali </label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="nama_wali" type="text" required="" placeholder="Nama Wali">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Alamat Wali </label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="alamat_wali" type="text" required="" placeholder="Alamat Wali">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Pekerjaan Wali </label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="pekerjaan_wali" type="text" required="" placeholder="Contoh : Karyawan, Guru, dll">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">No HP Orang Tua (Ayah/Ibu) </label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="no_hp_ortu" type="text" required="" placeholder="Contoh : 08xxxxx">
            </div>
            <div class="mt-3">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">No HP Siswa </label>
                <input class="border-2 border-gray-400 w-full px-5 py-1 text-gray-700 rounded" id="cus_name" name="no_hp_siswa" type="text" required="" placeholder="Contoh : 08xxxxx">
            </div>
            <div class="mt-4">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Silahkan Upload File/Foto Transfer Pembayaran Pendaftaran Disni Untuk Transaksi Pembayaran Formulir Pendaftaran Sebesar RP. 200.000,- dapat dikirim ke Rekening (BNI 0966984519 a.n. Fatimah) </label>
                <div class="border border-dashed border-gray-500 relative">
                    <input type="file" name="bukti_bayar" multiple class="cursor-pointer relative block opacity-0 w-full xl:w-100 h-50 p-20 z-50">
                    <div class="text-center p-10 absolute top-0 right-0 left-0 m-auto">
                        <h4>
                            Drop files anywhere to upload
                            <br />or
                        </h4>
                        <p class="">Select Files</p>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <label class="font-bold block text-sm text-gray-00" for="cus_name">Dapat Info SMK Harapan Bangsa Dari </label>
                <label class="">
                    <input type="radio" name="sumber_info" value="Internet">
                    <span class="text-sm">Internet</span>
                </label>
                <label class="ml-4">
                    <input type="radio" name="sumber_info" value="Brosur">
                    <span class="text-sm">Brosur</span>
                </label>
                <label class="ml-4">
                    <input type="radio" name="sumber_info" value="Social Media">
                    <span class="text-sm">Social Media</span>
                </label>
                <label class="ml-4">
                    <input type="radio" name="sumber_info" value="Teman">
                    <span class="text-sm">Teman</span>
                </label>
            </div>
            <p class="mt-3 font-bold">Informasi Tambahan <br></p>
            <div class="mt-2 text-sm flex flex-wrap">

                <div class="w-full overflow-hidden xl:w-1/2">
                    <p> Untuk No yang dapat dihubungi melalui WA: <br>
                        <li>0858148112651 (Pak Indra)</li>
                    </p>
                </div>

                <div class="w-full overflow-hidden xl:w-1/2">
                    <p> Untuk Email SMK Harapan Bangsa Depok: <br>
                        <li>smks.harapanbangsa@gmail.com</li>
                    </p>
                </div>

            </div>

            <label class="mt-3 font-bold block text-sm text-gray-00" for="cus_name">Rincian Biaya SMK Harapan Bangsa Depok </label>
            <img src="/image/Brosur.jpg" alt="Brosur" width="370" height="478">
            <div class="flex xl:block justify-between">
                <input type="Submit" value="Kirim" class="rounded text-white py-1 px-6 green">
                <a href="" class="font-bold ml-10"><u>Kembali</u></a>
            </div>
        </form>
    </div>
</main>
@endsection