<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->DataModel = new Review();
    }

    public function adminDataReview()
    {
        $data = [
            'lomba' => $this->DataModel->allData(),
        ];
        return view('admin/review.data_review', $data);
    }

    public function addDataReview()
    {

        $data = [
            'nama_alumni' => Request()->nama_alumni,
            'isi_review' => Request()->pendapat,
        ];

        $this->DataModel->addDataReview($data);
        return redirect('/admin/review');
    }

    public function detailDataReview($kode)
    {
        $data = [
            'lomba' => $this->DataModel->detailDataReview($kode)
        ];
        return view('admin/review.edit_review', $data);
    }

    public function editDataReview($kode)
    {

        $data = [
            'nama_alumni' => Request()->nama_alumni,
            'isi_review' => Request()->pendapat,
        ];

        $this->DataModel->editDataReview($kode, $data);
        return redirect('/admin/review');
    }

    public function hapusDataReview($kode)
    {
        $this->DataModel->hapusDataReview($kode);
        return back();
    }
}
