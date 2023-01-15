<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ekskul extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('ekskuls')->get();
    }

    public function detailDataEkskul($kode)
    {
        return DB::table('ekskuls')
            ->where('id_ekskul', $kode)
            ->first();
    }

    public function editDataEkskul($kode, $data)
    {
        DB::table('ekskuls')
            ->where('id_ekskul', $kode)
            ->update($data);
    }

    public function addDataEkskul($data)
    {
        DB::table('ekskuls')->insert($data);
    }

    public function hapusDataEkskul($kode)
    {
        DB::table('ekskuls')
            ->where('id_ekskul', $kode)->delete();
    }
}
