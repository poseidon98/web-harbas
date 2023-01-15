<?php

namespace App\Http\Controllers;

use App\Models\DataModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailKonfirmasi;

class DataController extends Controller
{
    public function __construct()
    {
        $this->DataModel = new DataModel();
    }

    public function dataGuru()
    {
        $data = [
            'guru' => $this->DataModel->allData(),
        ];
        return view('bagan_sekolah', $data);
    }

    public function addDataCalonSiswa()
    {
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Ymd");
        $nama_lengkap = Request()->nama_lengkap;
        $bukti_bayar = Request()->bukti_bayar;
        $fileName = $tanggal . '_' . $nama_lengkap . '.' . $bukti_bayar->extension();
        //make directory
        $path = public_path() . '/image/bukti_bayar';
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, false);
        }

        if (Request()->sumber_info == "Teman") {
            $rekomendasi = Request()->nama_teman;
        } else {
            $rekomendasi = "-";
        }

        // pindahkan file
        $bukti_bayar->move(public_path('/image/bukti_bayar'), $fileName);
        date_default_timezone_set("Asia/Jakarta");
        $saat_ini = date("Y-m-d h:i:s");
        $data = [
            'email' => Request()->email,
            'nama_lengkap' => $nama_lengkap,
            'jekel' => Request()->jekel,
            'jurusan' => Request()->jurusan,
            'tmpt_tgl_lahir' => Request()->tmpt_tgl_lahir,
            'agama' => Request()->agama,
            'alamat' => Request()->alamat,
            'sekolah_asal' => Request()->sekolah_asal,
            'nama_ayah' => Request()->nama_ayah,
            'nama_ibu' => Request()->nama_ibu,
            'pekerjaan_ortu' => Request()->pekerjaan_ortu,
            'nama_wali' => Request()->nama_wali,
            'alamat_wali' => Request()->alamat_wali,
            'pekerjaan_wali' => Request()->pekerjaan_wali,
            'no_hp_ortu' => Request()->no_hp_ortu,
            'no_hp_siswa' => Request()->no_hp_siswa,
            'bukti_bayar' => $fileName,
            'sumber_info' => Request()->sumber_info,
            'konfirmasi_pembayaran' => 'Belum Konfirmasi',
            'created_at' => date("Y-m-d h:i:s"),
            'nama_teman' => $rekomendasi,
        ];
        $this->DataModel->addDataCalonSiswa($data);

        Request()->session()->flush();
        Request()->session()->put('email', Request()->email);
        Request()->session()->put('nama_lengkap', Request()->nama_lengkap);
        Request()->session()->put('jekel', Request()->jekel);
        Request()->session()->put('jurusan', Request()->jurusan);
        Request()->session()->put('tmpt_tgl_lahir', Request()->tmpt_tgl_lahir);
        Request()->session()->put('agama', Request()->agama);
        Request()->session()->put('alamat', Request()->alamat);
        Request()->session()->put('sekolah_asal', Request()->sekolah_asal);
        Request()->session()->put('nama_ayah', Request()->nama_ayah);
        Request()->session()->put('nama_ibu', Request()->nama_ibu);
        Request()->session()->put('pekerjaan_ortu', Request()->pekerjaan_ortu);
        Request()->session()->put('nama_wali', Request()->nama_wali);
        Request()->session()->put('alamat_wali', Request()->alamat_wali);
        Request()->session()->put('pekerjaan_wali', Request()->pekerjaan_wali);
        Request()->session()->put('no_hp_ortu', Request()->no_hp_ortu);
        Request()->session()->put('no_hp_siswa', Request()->no_hp_siswa);
        Request()->session()->put('tanggal', $saat_ini);

        return redirect('/kirimemail');
    }

    public function KonfirmasiEmail()
    {
        // $email = Request()->email;

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

        Mail::to($email)->send(new EmailKonfirmasi());

        return redirect('/form-pendaftaran/success');
    }
}
