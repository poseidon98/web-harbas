<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Affiliate extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('affiliates')->get();
    }

    public function detailDataAffiliate($kode)
    {
        return DB::table('affiliates')
            ->where('id', $kode)
            ->first();
    }

    public function editDataAffiliate($kode, $data)
    {
        DB::table('affiliates')
            ->where('id', $kode)
            ->update($data);
    }

    public function addDataAffiliate($data)
    {
        DB::table('affiliates')->insert($data);
    }

    public function hapusDataAffiliate($kode)
    {
        DB::table('affiliates')
            ->where('id', $kode)->delete();
    }
}
