<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekskul;
use Illuminate\Support\Facades\File;

class EkskulController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->DataModel = new Ekskul();
    }

    public function adminEkskul()
    {
        $data = [
            'ekskul' => $this->DataModel->get(),
        ];
        return view('admin/ekskul.data_ekskul', $data);
    }

    public function addDataEkskul()
    {
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Ymd");
        $nama_logo = Request()->nama_logo;
        $file_logo = Request()->file_logo;
        $fileName = $tanggal . '_' . $nama_logo . '.' . $file_logo->extension();

        //make directory
        $path = public_path() . '/image/logo/ekskul';
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, false);
        }
        // pindahkan file
        $file_logo->move(public_path('/image/logo/ekskul'), $fileName);

        $data = [
            'nama_ekskul' => Request()->nama_logo,
            'logo_ekskul' => $fileName,
        ];

        $this->DataModel->addDataEkskul($data);
        return redirect('/admin/ekskul');
    }

    public function detailEkskul($kode)
    {
        $data = [
            'ekskul' => $this->DataModel->detailDataEkskul($kode)
        ];
        return view('admin/ekskul.edit_ekskul', $data);
    }

    public function editEkskul($kode)
    {

        if (Request()->file_logo != null) {


            date_default_timezone_set("Asia/Jakarta");
            $tanggal = date("Ymd");
            $nama_logo = Request()->nama_logo;
            $file_logo = Request()->file_logo;
            $fileName = $tanggal . '_' . $nama_logo . '.' . $file_logo->extension();

            //make directory
            $path = public_path() . '/image/logo/ekskul';
            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true, false);
            }
            // pindahkan file
            $file_logo->move(public_path('/image/logo/ekskul'), $fileName);

            $data = [
                'nama_ekskul' => Request()->nama_logo,
                'logo_ekskul' => $fileName,
            ];
        } else {
            $data = [
                'nama_ekskul' => Request()->nama_logo,
            ];
        }

        $this->DataModel->editDataEkskul($kode, $data);
        return redirect('/admin/ekskul');
    }

    public function hapusEkskul($kode)
    {
        $gambar = $this->DataModel->detailDataEkskul($kode);
        File::delete('image/logo/ekskul/' . $gambar->logo_ekskul);
        $this->DataModel->hapusDataEkskul($kode);

        return back();
    }
}
