<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Affiliate;
use App\Models\PrestasiModel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->KerjaSama = new Affiliate();
        $this->review = new Review();
        $this->DataModel = new PrestasiModel();
    }

    public function Index()
    {
        $data = [
            'kerja_sama' => $this->KerjaSama->get(),
            'review' => $this->review->get(),
        ];
        return view('landing-page', $data);
    }

    public function Prestasi()
    {
        $data = [
            'prestasi' => $this->DataModel->allData(),
        ];
        return view('prestasi', $data);
    }
}
