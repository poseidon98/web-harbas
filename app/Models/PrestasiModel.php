<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PrestasiModel extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('tbl_prestasi')
            ->orderBy('juara')
            ->orderBy('nama_lomba')
            ->get();
    }

    public function detailDataPrestasi($kode)
    {
        return DB::table('tbl_prestasi')
            ->where('id', $kode)
            ->first();
    }

    public function editDataPrestasi($kode, $data)
    {
        DB::table('tbl_prestasi')
            ->where('id', $kode)
            ->update($data);
    }

    public function addDataPrestasi($data)
    {
        DB::table('tbl_prestasi')->insert($data);
    }

    public function hapusDataPrestasi($kode)
    {
        DB::table('tbl_prestasi')
            ->where('id', $kode)->delete();
    }
}
