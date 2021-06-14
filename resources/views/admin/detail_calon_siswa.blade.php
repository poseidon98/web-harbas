@extends('admin/layout/template')
@section('content')
    <div class="container w-full mx-auto pt-20">
        <!-- Code on GiHub: https://github.com/vitalikda/form-floating-labels-tailwindcss -->


        <div class="bg-gray-100 p-0 sm:p-12">
            <div class="mx-auto max-w-lg px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
                <h1 class="text-2xl text-center font-bold mb-8">Detail Data Siswa</h1>
                <table class="w-full">
                    <tr valign="top">
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $siswa->nama_lengkap }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $siswa->jekel }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $siswa->tmpt_tgl_lahir }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Agama</td>
                        <td>:</td>
                        <td>{{ $siswa->agama }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $siswa->alamat }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Jurusan yang Dipilih</td>
                        <td>:</td>
                        <td>{{ $siswa->jurusan }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Sekolah Asal</td>
                        <td>:</td>
                        <td>{{ $siswa->sekolah_asal }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Nama Ayah</td>
                        <td>:</td>
                        <td>{{ $siswa->nama_ayah }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Nama Ibu</td>
                        <td>:</td>
                        <td>{{ $siswa->nama_ibu }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Pekerjaan Orang Tua</td>
                        <td>:</td>
                        <td>{{ $siswa->pekerjaan_ortu }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Nama Wali</td>
                        <td>:</td>
                        <td>{{ $siswa->nama_wali }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Alamat Wali</td>
                        <td>:</td>
                        <td>{{ $siswa->alamat_wali }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Pekerjaan Wali</td>
                        <td>:</td>
                        <td>{{ $siswa->pekerjaan_wali }}</td>
                    </tr>
                    <tr valign="top">
                        <td>No HP Orang Tua</td>
                        <td>:</td>
                        <td>{{ $siswa->no_hp_ortu }}</td>
                    </tr>
                    <tr valign="top">
                        <td>No HP Siswa</td>
                        <td>:</td>
                        <td>{{ $siswa->no_hp_siswa }}</td>
                    </tr>
                    <tr valign="top">
                        <td>Sumber Info Penerimaan Calon Siswa</td>
                        <td>:</td>
                        <td>{{ $siswa->sumber_info }}</td>
                    </tr>
                </table>
                <div class="text-center my-3">
                    <?php $warna = 'bg-black'; ?>
                    @if ($siswa->konfirmasi_pembayaran == 'Terkonfirmasi')
                        <?php $warna = 'bg-green-600'; ?>
                    @elseif($siswa->konfirmasi_pembayaran == 'Belum Konfirmasi')
                        <?php $warna = 'bg-red-600'; ?>
                    @endif

                    <span class="{{ $warna }} text-white py-1 px-3 rounded-full">Pembayaran
                        {{ $siswa->konfirmasi_pembayaran }}</span>
                </div>
                <p class="my-3">
                    Bukti Pembayaran :
                    <img src="/image/bukti_bayar/{{ $siswa->bukti_bayar }}" alt="">

                </p>
                <div class="flex justify-between">
                    <form action="/admin/calonsiswa/konfirmbayar/{{ $siswa->id }}" method="POST">
                        @csrf
                        <input type="submit" value="Konfirmasi Pembayaran"
                            class="px-2 py-1 rounded shadow-md bg-blue-500 text-white hover:bg-blue-700">
                    </form>
                    <a href="/admin/calonsiswa"
                        class="px-2 py-1 rounded shadow-md bg-white text-gray-800 hover:bg-gray-200">
                        Kembali
                    </a>
                </div>

            </div>
        </div>


    </div>
@endsection
