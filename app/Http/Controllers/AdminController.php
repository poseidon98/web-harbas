<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataModel;
use Illuminate\Support\Facades\File;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->DataModel = new DataModel();
    }

    public function dataCalonSiswa()
    {
        $data = [
            'siswa' => $this->DataModel->allDataCalonSiswa(),
        ];
        return view('admin.data_calon_siswa', $data);
    }

    public function detailDataCalonSiswa($kode)
    {
        $data = [
            'siswa' => $this->DataModel->detailDataCalonSiswa($kode),
        ];
        return view('admin.detail_calon_siswa', $data);
    }

    public function editDetailDataCalonSiswa($kode)
    {
        $data = [
            'siswa' => $this->DataModel->detailDataCalonSiswa($kode),
        ];
        return view('admin.edit_calon_siswa', $data);
    }

    public function editDataCalonSiswa($kode)
    {

        $data = [
            'email' => Request()->email,
            'nama_lengkap' => Request()->nama_lengkap,
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
            'konfirmasi_pembayaran' => Request()->konfirmasi_pembayaran,
        ];
        $this->DataModel->editDataCalonSiswa($kode, $data);
        return redirect('/admin/calonsiswa');
    }

    public function konfirmasiPembayaranCalonSiswa($kode)
    {
        $data = [
            'konfirmasi_pembayaran' => 'Terkonfirmasi',
        ];
        $this->DataModel->editDataCalonSiswa($kode, $data);
        return redirect('/admin/calonsiswa');
    }

    public function hapusDataCalonSiswa($kode)
    {
        $this->DataModel->hapusDataCalonSiswa($kode);
        return back();
    }

    public function adminDataGuru()
    {
        $data = [
            'guru' => $this->DataModel->allData(),
        ];
        return view('admin.data_guru', $data);
    }

    public function addDataGuru()
    {

        $data = [
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
        ];

        $this->DataModel->addDataGuru($data);
        return redirect('/admin/guru');
    }

    public function detailDataGuru($kode)
    {
        $data = [
            'guru' => $this->DataModel->detailDataGuru($kode)
        ];
        return view('admin.edit_guru', $data);
    }

    public function editDataGuru($kode)
    {

        $data = [
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
        ];

        $this->DataModel->editDataGuru($kode, $data);
        return redirect('/admin/guru');
    }

    public function hapusDataGuru($kode)
    {
        $this->DataModel->hapusDataGuru($kode);
        return back();
    }

    public function exportExcel()
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }
}
