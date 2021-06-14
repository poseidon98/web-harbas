<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DataModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_nama_guru')->get();
    }

    public function detailDataGuru($kode)
    {
        return DB::table('tbl_nama_guru')
            ->where('id_guru', $kode)
            ->first();
    }

    public function editDataGuru($kode, $data)
    {
        DB::table('tbl_nama_guru')
            ->where('id_guru', $kode)
            ->update($data);
    }

    public function addDataGuru($data)
    {
        DB::table('tbl_nama_guru')->insert($data);
    }

    public function hapusDataGuru($kode)
    {
        DB::table('tbl_nama_guru')
            ->where('id_guru', $kode)->delete();
    }

    // calon siswa

    public function allDataCalonSiswa()
    {
        return DB::table('tbl_calon_siswa')->get();
    }

    public function addDataCalonSiswa($data)
    {
        DB::table('tbl_calon_siswa')->insert($data);
    }

    public function detailDataCalonSiswa($kode)
    {
        return DB::table('tbl_calon_siswa')
            ->where('id', $kode)
            ->first();
    }

    public function editDataCalonSiswa($kode, $data)
    {
        DB::table('tbl_calon_siswa')
            ->where('id', $kode)
            ->update($data);
    }

    public function hapusDataCalonSiswa($kode)
    {
        DB::table('tbl_calon_siswa')
            ->where('id', $kode)->delete();
    }
}
