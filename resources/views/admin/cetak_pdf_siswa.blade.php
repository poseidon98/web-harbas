<html>

<head>
    <title></title>
</head>

<body>
    <center>FORMULIR PENDAFTARAN SMK HARAPAN BANGSA</center><br />
    <center>
        <table>
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
    </center>
</body>

</html>
