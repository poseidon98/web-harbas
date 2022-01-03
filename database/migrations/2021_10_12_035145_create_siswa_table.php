<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_calon_siswa', function (Blueprint $table) {
            $table->id();
            $table->text('email');
            $table->text('nama_lengkap');
            $table->text('jekel');
            $table->text('jurusan');
            $table->text('tmpt_tgl_lahir');
            $table->text('agama');
            $table->text('alamat');
            $table->text('sekolah_asal');
            $table->text('nama_ayah');
            $table->text('nama_ibu');
            $table->text('pekerjaan_ortu');
            $table->text('nama_wali');
            $table->text('alamat_wali');
            $table->text('pekerjaan_wali');
            $table->text('no_hp_ortu');
            $table->text('no_hp_siswa');
            $table->string('bukti_bayar', 255);
            $table->text('sumber_info');
            $table->text('konfirmasi_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
