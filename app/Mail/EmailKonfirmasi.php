<?php

namespace App\Mail;

use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailKonfirmasi extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = Request()->session()->get('email');
        $nama_lengkap = Request()->session()->get('nama_lengkap');
        $jekel = Request()->session()->get('jekel');
        $jurusan = Request()->session()->get('jurusan');
        $tmpt_tgl_lahir = Request()->session()->get('tmpt_tgl_lahir');
        $agama = Request()->session()->get('agama');
        $alamat = Request()->session()->get('alamat');
        $sekolah_asal = Request()->session()->get('sekolah_asal');
        $nama_ayah = Request()->session()->get('nama_ayah');
        $nama_ibu = Request()->session()->get('nama_ibu');
        $pekerjaan_ortu = Request()->session()->get('pekerjaan_ortu');
        $nama_wali = Request()->session()->get('nama_wali');
        $alamat_wali = Request()->session()->get('alamat_wali');
        $pekerjaan_wali = Request()->session()->get('pekerjaan_wali');
        $no_hp_ortu = Request()->session()->get('no_hp_ortu');
        $no_hp_siswa = Request()->session()->get('no_hp_siswa');
        $tanggal = Request()->session()->get('tanggal');

        return $this->from('smks.harapanbangsa@gmail.com')
            ->view('admin.emailku')
            ->with(
                [
                    'email' => $email,
                    'nama_lengkap' => $nama_lengkap,
                    'jekel' => $jekel,
                    'jurusan' => $jurusan,
                    'tmpt_tgl_lahir' => $tmpt_tgl_lahir,
                    'agama' => $agama,
                    'alamat' => $alamat,
                    'sekolah_asal' => $sekolah_asal,
                    'nama_ayah' => $nama_ayah,
                    'nama_ibu' => $nama_ibu,
                    'pekerjaan_ortu' => $pekerjaan_ortu,
                    'nama_wali' => $nama_wali,
                    'alamat_wali' => $alamat_wali,
                    'pekerjaan_wali' => $pekerjaan_wali,
                    'no_hp_ortu' => $no_hp_ortu,
                    'no_hp_siswa' => $no_hp_siswa,
                    'tanggal' => $tanggal,
                ]
            );
    }
}
