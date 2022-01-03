<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Review extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('reviews')->get();
    }

    public function detailDataReview($kode)
    {
        return DB::table('reviews')
            ->where('id', $kode)
            ->first();
    }

    public function editDataReview($kode, $data)
    {
        DB::table('reviews')
            ->where('id', $kode)
            ->update($data);
    }

    public function addDataReview($data)
    {
        DB::table('reviews')->insert($data);
    }

    public function hapusDataReview($kode)
    {
        DB::table('reviews')
            ->where('id', $kode)->delete();
    }
}
