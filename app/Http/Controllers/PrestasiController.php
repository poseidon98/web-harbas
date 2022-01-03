<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrestasiModel;

class PrestasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->DataModel = new PrestasiModel();
    }

    public function adminDataPrestasi()
    {
        $data = [
            'lomba' => $this->DataModel->allData(),
        ];
        return view('admin/prestasi.data_prestasi', $data);
    }

    public function addDataPrestasi()
    {

        $data = [
            'nama_lomba' => Request()->nama_lomba,
            'juara' => Request()->juara,
            'tahun' => Request()->tahun,
        ];

        $this->DataModel->addDataPrestasi($data);
        return redirect('/admin/prestasi');
    }

    public function detailDataPrestasi($kode)
    {
        $data = [
            'lomba' => $this->DataModel->detailDataPrestasi($kode)
        ];
        return view('admin/prestasi.edit_prestasi', $data);
    }

    public function editDataPrestasi($kode)
    {

        $data = [
            'nama_lomba' => Request()->nama_lomba,
            'juara' => Request()->juara,
            'tahun' => Request()->tahun,
        ];

        $this->DataModel->editDataPrestasi($kode, $data);
        return redirect('/admin/prestasi');
    }

    public function hapusDataPrestasi($kode)
    {
        $this->DataModel->hapusDataPrestasi($kode);
        return back();
    }
}
