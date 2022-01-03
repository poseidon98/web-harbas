<?php

namespace App\Http\Controllers;

use App\Models\DataModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        // pindahkan file
        $bukti_bayar->move(public_path('/image/bukti_bayar'), $fileName);

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
        ];
        $this->DataModel->addDataCalonSiswa($data);
        return redirect('https://api.whatsapp.com/send?phone=+628982023608&text=ingin mengkorfimasi pembayaran atas nama =' . $nama_lengkap . ' ');
    }
}
