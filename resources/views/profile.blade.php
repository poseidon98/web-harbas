@extends('layout/template')
@section('content')
<main class="mt-20">
    <div class="w-full flex flex-wrap px-10">
        <div class="w-full xl:w-1/2">
            <div class="text-4xl xl:text-5xl pt-10 font-bold">Profil</div>
            <div class="text-4xl xl:text-5xl pt-5 font-bold">SMK Harapan Bangsa</div>
            <div class="text-4xl xl:text-5xl pt-5 font-bold">Depok</div>
            <p class="text-lg pt-7">Tujuan pembangunan nasional Indonesia, salah satunya adalah mencerdaskan dan
                mendewasakan seluruh masyarakat Indonesia. Dengan cerdas dan dewasa dalam berfikir, bersikap, dan
                bertindak, maka tujuan-tujuan nasional lainnya akan tercapai, sebagaimana termaksud dalam pembukaan
                Undang-Undang Dasar 1945, yaitu: Melindungi segenap bangsa, memajukan kesejahteraan umum, mencerdaskan
                kehidupan bangsa, dan melaksanakan ketertiban dunia.</p>

            <p class="text-lg pt-7">Salah satu bidang garapan guna mencerdaskan dan mendewasakan kehidupan bangsa adalah
                dengan pendidikan dan pelatihan. Sehingga mencerdaskan kehidupan bangsa adalah satu keharusan dan tidak
                bisa ditawar-tawar lagi bila bangsa ini ingin maju, berkembang, dan berkarakter, sehingga bisa bersaing
                dan sejajar dengan bangsa-bangsa lain dalam segala bidang.</p>
        </div>

        <div class="w-full justify-center items-start hidden xl:grid xl:w-1/2">
            <img src="/image/City buildings _Two Color 1.png" class="mt-4" width="500" height="500" alt="">
        </div>

        <div class="w-full grid justify-items-start my-10 items-start xl:w-1/2">
            <img src="/image/unnamed (3) 1.png" class="mt-4" alt="">
        </div>
        <div class="w-full xl:w-1/2 my-10 ">
            <p class="text-lg">Kota Depok, memiliki potensi lapangan pekerjaan yang cukup banyak Sehingga dengan potensi
                yang ada, diperlukan sumber daya manusia yang mampu memanfaatkan potensi yang ada. Namun kendala yang
                dihadapi diantaranya sarana kota yang kekurangan jumlah fasilitas pendidikan, kesehatan, angkutan dan
                kelayakan prasarana angkutan.</p>

            <p class="text-lg pt-7">
                Berdasarkan latar belakang diatas, maka pada tahun 2007 SMK Harapan Bangsa lahir dibawah naungan Yayasan
                Reste Nur Insani yang merupakan institusi pendidikan formal mempunyai visi misi dan strategi baru dalam
                proses pembelajaran.</p>
        </div>


        <div class="w-full py-7">
            <p class="text-4xl font-semibold">Peta</p>
        </div>
        <div class="w-full flex flex-wrap justify-items-start items-start xl:w-1/2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.253959596814!2d106.8367708!3d-6.3534476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3be0fb2677668621!2sSekolah%20Menengah%20Kejuruan%20Harapan%20Bangsa!5e0!3m2!1sen!2sid!4v1620706021623!5m2!1sen!2sid" class="w-full mx-3" width="" height="301" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="w-full xl:w-1/2">
            <p class="text-2xl">Alamat : Jl. Komjen Pol. M. Jasin ( Akses UI ) No. 89
                Kelapa Dua Cimanggis, Depok, Jawa Barat 16951</p>

            <p class="text-2xl pt-7">
                Telp. 021 ‒ 87720786 | Fax. 021- 87721016</p>
        </div>



        <div class="w-full my-14">
            <label class="text-3xl font-bold text-bold text-gray-00" for="cus_name">Fasilitas</label>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/network.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Lab. Komp. Jaringan</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/coding.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Lab. Komp. Coding</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/server.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Server Center</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/hotspot.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Area Hotspot</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/server(1).svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Peralatan Praktek</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex text-center justify-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/air-conditioner.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">AC</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex text-center justify-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/projector.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">LCD Proyektor</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/chair.svg" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Kursi Meja Lipat Belajar</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex text-center justify-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/security-camera 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">CCTV</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/analytics 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Lab. Komp. Bisnis</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/accounting (1) 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Lab. Komp. Akuntansi</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/medicine 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Lab. Farmasi</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/fingerprint-scanner 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Absen Online</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/microscope 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Lab. Analis Kesahatan</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/lab-tool 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Lab. Kimia</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/mosque 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Absen Online</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/parking-lot 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">Area Parkir</p>
            </div>
        </div>

        <div class="w-1/2 xl:justify-start flex justify-center text-center xl:w-1/3">
            <div class="relative block xl:flex items-center my-3">
                <img src="/image/more 1.png" class="inline" alt="" width="60" height="60">
                <p class="xl:ml-3 text-lg font-bold text-bold">dan lain-lain.</p>
            </div>
        </div>

        <div class="w-full py-7">
            <p class="mb-5 text-4xl font-semibold">Visi</p>

            <ol class="px-7 text-lg font-semibold list-decimal">
                <li>Menjadi SMK terkemuka dan disegani, dengan tampilan siswa yang disiplin, berbudi pekerti, beriman
                    dan berakhlak mulia.</li>
                <li>Tidak menciptakan pengangguran baru, dengan lulusan yang punya nilai keunggulan, sehingga mendapat
                    kepercayaan dan citra yang baik dan citra yang baik dari stakeholder</li>
            </ol>
        </div>

        <div class="w-full py-7">
            <p class="mb-5 text-4xl font-semibold">Misi</p>

            <ol class="px-7 text-lg font-semibold list-decimal">
                <li>Menyediakan fasilitas belajar mengajar yang memadai</li>
                <li>Menyelenggarakan proses belajar mengajar yang disiplin</li>
                <li>Melengkapi tenaga guru sesuai proporsi ketentuan kompetensi</li>
                <li>Menjaga keharmonisan dan kekompakkan antara Yayasan, Guru, Staf dan siswa</li>
                <li>Mengadakan kegiatan ekstra kurikuler berikut sarana dan prasarana secara memadai</li>
                <li>Mengembangkan guru dan staff dalam hal keterampilan teknis dan manajemen dan mengedepankan nilai
                    seni tauladan</li>
                <li>Menjaga situasi yang kondusif untuk menunjang semua aktifitas agar dapat berjalan sesuai dengan
                    harapan stakeholder</li>
            </ol>
        </div>

        <div class="w-full py-7">
            <p class="mb-5 text-4xl font-semibold">Keunggulan</p>

            <ol class="px-7 text-lg font-semibold list-decimal">
                <li>Terakreditasi A ( Sangat Baik )
                </li>
                <li>berakhlak baik, disiplin, tanggung jawab, dan kreatif
                </li>
                <li>berprestasi tingkat kota</li>
                <li>dikelola oleh Reste Nur Insani yang sudah berpengalaman dalam dunia pendidikan
                </li>
                <li>Disiplin belajar yang ketat, sekolah bebas Narkoba , rokok & miras.
                </li>
                <li>ujian sekolah berbasis online
                </li>
                <li>kelas maksimal 32 siswa/i
                </li>
                <li>Materi pelajaran tambahan yang bersifat practical knowledge, life skill attitude sesuai kebutuhan
                    dunia kerja.
                </li>
                <li>sudah diakui dunia usaha dan industri
                </li>
                <li>tersedia beasiswa
                </li>
                <li>Memiliki unit kegiatan yang variatif
                </li>
                <li>Dibantu program magang kerja*, dengan banyaknya MOU dengan perusahaan-perusahaan dan
                    instansi-instansi yang berkaitan dengan jurusan yang ada di SMK Harapan Bangsa
                </li>
                <li>Bekerja sama dengan beberapa perguruan tinggi swasta maupun negeri dalam hal peningkatan mutu
                    sekolah kejuruan & penerimaan mahasiswa/i baru
                </li>
                <li>Dengan jaringan relasi perusahaan yang kita bentuk, tidak sulit bagi kami untuk menyalurkan alumni
                    kami untuk bekerja sesuai dengan bidangnya, karena begitu banyaknya permintaaan lulusan termuda
                    harapan bangsa, permintaan tenaga kerja yang berasal dari perusahaan-perusahaan obat, maupun
                    instansi kesehatan ternama.Serta perusahaan - perusahaan swasta maupun BUMN yang membutuhkan akuntan
                    muda dan tenaga komputer jaringan
                </li>
                <li>absensi siswa dan guru berbasis online.</li>
            </ol>
        </div>
    </div>
</main>
@endsection