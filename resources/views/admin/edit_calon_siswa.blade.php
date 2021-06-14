@extends('admin/layout/template')
@section('content')
    <div class="container w-full mx-auto pt-20">
        <!-- Code on GiHub: https://github.com/vitalikda/form-floating-labels-tailwindcss -->
        <style>
            .-z-1 {
                z-index: -1;
            }

            .origin-0 {
                transform-origin: 0%;
            }

            input:focus~label,
            input:not(:placeholder-shown)~label,
            textarea:focus~label,
            textarea:not(:placeholder-shown)~label,
            select:focus~label,
            select:not([value='']):valid~label {
                /* @apply transform; scale-75; -translate-y-6; */
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                --tw-scale-x: 0.75;
                --tw-scale-y: 0.75;
                --tw-translate-y: -1.5rem;
            }

            input:focus~label,
            select:focus~label {
                /* @apply text-black; left-0; */
                --tw-text-opacity: 1;
                color: rgba(0, 0, 0, var(--tw-text-opacity));
                left: 0px;
            }

        </style>

        <div class="bg-gray-100 p-0 sm:p-12">
            <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
                <h1 class="text-2xl font-bold mb-8">Ubah Data Calon Siswa</h1>
                <form method="POST" action="/admin/calonsiswa/edit/proses/{{ $siswa->id }}" enctype="multipart/form-data"
                    id="form" novalidate>
                    @csrf
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="nama_lengkap" value="{{ $siswa->nama_lengkap }}" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Nama Siswa</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <select
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                            name="jekel" id="">
                            <option value="Laki-laki" {{ $siswa->jekel == 'Laki-laki' ? 'selected' : '' }}>
                                Laki-laki
                            </option>
                            <option value="Perempuan" {{ $siswa->jekel == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan
                            </option>
                        </select>
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Jenis
                            Kelamin</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="tmpt_tgl_lahir" value="{{ $siswa->tmpt_tgl_lahir }}" placeholder=" "
                            required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Tempat, Tanggal
                            Lahir</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="agama" value="{{ $siswa->agama }}" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Agama</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="alamat" value="{{ $siswa->alamat }}" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Alamat</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <select
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                            name="jurusan" id="">
                            <option value="Analisis Kesehatan"
                                {{ $siswa->jurusan == 'Analisis Kesehatan' ? 'selected' : '' }}>
                                Analisis Kesehatan
                            </option>
                            <option value="Akuntansi Komputer"
                                {{ $siswa->jurusan == 'Akuntansi Komputer' ? 'selected' : '' }}>
                                Akuntansi Komputer
                            </option>
                            <option value="Farmasi Kesehatan"
                                {{ $siswa->jurusan == 'Farmasi Kesehatan' ? 'selected' : '' }}>
                                Farmasi Kesehatan</option>
                            <option value="Teknik Komputer Jaringan"
                                {{ $siswa->jurusan == 'Teknik Komputer Jaringan' ? 'selected' : '' }}>
                                Teknik Komputer Jaringan
                            </option>
                        </select>
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Jurusan</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="sekolah_asal" value="{{ $siswa->sekolah_asal }}" placeholder=" "
                            required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Sekolah
                            Asal</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="nama_ayah" value="{{ $siswa->nama_ayah }}" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Nama Ayah</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="nama_ibu" value="{{ $siswa->nama_ibu }}" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Nama Ibu</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="pekerjaan_ortu" value="{{ $siswa->pekerjaan_ortu }}" placeholder=" "
                            required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Pekerjaan Orang
                            Tua</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="nama_wali" value="{{ $siswa->nama_wali }}" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Nama Wali</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="alamat_wali" value="{{ $siswa->alamat_wali }}" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Alamat
                            Wali</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="pekerjaan_wali" value="{{ $siswa->pekerjaan_wali }}" placeholder=" "
                            required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Pekerjaan
                            Wali</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="no_hp_ortu" value="{{ $siswa->no_hp_ortu }}" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">No Orang Tua yang
                            Dapat Dihubungi</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="no_hp_siswa" value="{{ $siswa->no_hp_siswa }}" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">No Telepon
                            Siswa</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <input type="text" name="email" value="{{ $siswa->email }}" placeholder=" " required
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">E-mail</label>
                    </div>
                    <div class="relative z-0 w-full mb-5">
                        <select
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                            name="konfirmasi_pembayaran" id="">
                            <option value="Belum Konfirmasi"
                                {{ $siswa->konfirmasi_pembayaran == 'Belum Konfirmasi' ? 'selected' : '' }}>
                                Belum Konfirmasi
                            </option>
                            <option value="Terkonfirmasi"
                                {{ $siswa->konfirmasi_pembayaran == 'Terkonfirmasi' ? 'selected' : '' }}>
                                Terkonfirmasi
                            </option>
                        </select>
                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Konfirmasi
                            Pembayaran</label>
                    </div>
                    <input id="button" type="submit" value="Ubah Data"
                        class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none">

                </form>
            </div>
        </div>

        {{-- <script>
        'use strict'

        document.getElementById('button').addEventListener('click', toggleError)
        const errMessages = document.querySelectorAll('#error')

        function toggleError() {
            // Show error message
            errMessages.forEach((el) => {
                el.classList.toggle('hidden')
            })

            // Highlight input and label with red
            const allBorders = document.querySelectorAll('.border-gray-200')
            const allTexts = document.querySelectorAll('.text-gray-500')
            allBorders.forEach((el) => {
                el.classList.toggle('border-red-600')
            })
            allTexts.forEach((el) => {
                el.classList.toggle('text-red-600')
            })
        }
    </script> --}}
    </div>
@endsection
