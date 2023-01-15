<html>

<head>

</head>

<body>
    <h3>Konfirmasi Pendaftaran SMK Harapan Bangsa</h3>
    <table>
        <tr>
            <td valign="top">Nama</td>
            <td valign="top">:</td>
            <td valign="top">{{ $nama_lengkap }}</td>
        </tr>
        <tr>
            <td valign="top">E-mail</td>
            <td valign="top">:</td>
            <td valign="top">{{ $email }}</td>
        </tr>
        <tr>
            <td valign="top">Jenis Kelamin</td>
            <td valign="top">:</td>
            <td valign="top">{{ $jekel }}</td>
        </tr>
        <tr>
            <td valign="top">Jurusan</td>
            <td valign="top">:</td>
            <td valign="top">{{ $jurusan }}</td>
        </tr>
        <tr>
            <td valign="top">Tempat, Tanggal Lahir</td>
            <td valign="top">:</td>
            <td valign="top">{{ $tmpt_tgl_lahir }}</td>
        </tr>
        <tr>
            <td valign="top">Agama</td>
            <td valign="top">:</td>
            <td valign="top">{{ $agama }}</td>
        </tr>
        <tr>
            <td valign="top">Alamat</td>
            <td valign="top">:</td>
            <td valign="top">{{ $alamat }}</td>
        </tr>
        <tr>
            <td valign="top">Sekolah Asal</td>
            <td valign="top">:</td>
            <td valign="top">{{ $sekolah_asal }}</td>
        </tr>
        <tr>
            <td valign="top">Nama Ayah</td>
            <td valign="top">:</td>
            <td valign="top">{{ $nama_ayah }}</td>
        </tr>
        <tr>
            <td valign="top">Nama Ibu</td>
            <td valign="top">:</td>
            <td valign="top">{{ $nama_ibu }}</td>
        </tr>
        <tr>
            <td valign="top">Pekerjaan Orang Tua</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pekerjaan_ortu }}</td>
        </tr>
        <tr>
            <td valign="top">Nama Wali</td>
            <td valign="top">:</td>
            <td valign="top">{{ $nama_wali }}</td>
        </tr>
        <tr>
            <td valign="top">Alamat Wali</td>
            <td valign="top">:</td>
            <td valign="top">{{ $alamat_wali }}</td>
        </tr>
        <tr>
            <td valign="top">Pekerjaan Wali</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pekerjaan_wali }}</td>
        </tr>
        <tr>
            <td valign="top">Nomor HP Orang Tua</td>
            <td valign="top">:</td>
            <td valign="top">{{ $no_hp_ortu }}</td>
        </tr>
        <tr>
            <td valign="top">Nomor HP Calon Siswa</td>
            <td valign="top">:</td>
            <td valign="top">{{ $no_hp_siswa }}</td>
        </tr>
    </table>

    <p>Data diatas merupakan data diri yang telah mendaftar sekolah di SMK Harapan Bangsa Depok pada tanggal
        {{ $tanggal }}.</p>
    <p>NB: <br />
        -Konfirmasi pendaftaran ini digunakan untuk syarat pengisian berkas berikutnya,<br />
        -Calon siswa diharap stand by untuk menerima info berikutnya.</p>
</body>

</html>
