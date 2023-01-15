<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affiliate;
use Illuminate\Support\Facades\File;

class AffiliateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->DataModel = new Affiliate();
    }

    public function adminAffiliate()
    {
        $data = [
            'kerja_sama' => $this->DataModel->get(),
        ];
        return view('admin/affiliate.data_affiliate', $data);
    }

    public function addDataAffiliate()
    {
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Ymd");
        $nama_logo = Request()->nama_logo;
        $file_logo = Request()->file_logo;
        $fileName = $tanggal . '_' . $nama_logo . '.' . $file_logo->extension();

        //make directory
        $path = public_path() . '/image/logo/affiliate';
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, false);
        }
        // pindahkan file
        $file_logo->move(public_path('/image/logo/affiliate'), $fileName);

        $data = [
            'nama_affiliate' => Request()->nama_logo,
            'file_logo' => $fileName,
        ];

        $this->DataModel->addDataAffiliate($data);
        return redirect('/admin/affiliate');
    }

    public function detailAffiliate($kode)
    {
        $data = [
            'lomba' => $this->DataModel->detailDataAffiliate($kode)
        ];
        return view('admin/affiliate.edit_affiliate', $data);
    }

    public function editAffiliate($kode)
    {

        if (Request()->file_logo != null) {


            date_default_timezone_set("Asia/Jakarta");
            $tanggal = date("Ymd");
            $nama_logo = Request()->nama_logo;
            $file_logo = Request()->file_logo;
            $fileName = $tanggal . '_' . $nama_logo . '.' . $file_logo->extension();

            //make directory
            $path = public_path() . '/image/logo/affiliate';
            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true, false);
            }
            // pindahkan file
            $file_logo->move(public_path('/image/logo/affiliate'), $fileName);

            $data = [
                'nama_affiliate' => Request()->nama_logo,
                'file_logo' => $fileName,
            ];
        } else {
            $data = [
                'nama_affiliate' => Request()->nama_logo,
            ];
        }

        $this->DataModel->editDataAffiliate($kode, $data);
        return redirect('/admin/affiliate');
    }

    public function hapusAffiliate($kode)
    {
        $gambar = $this->DataModel->detailDataAffiliate($kode);
        File::delete('image/logo/affiliate/' . $gambar->file_logo);
        $this->DataModel->hapusDataAffiliate($kode);
        return back();
    }
}
