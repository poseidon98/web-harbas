<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/form-pendaftaran', function () {
    return view('form_pendaftaran');
});

Route::post('/form-pendaftaran/add', [DataController::class, 'addDataCalonSiswa']);

Route::get('/form-pendaftaran/success', function () {
    return view('thanks');
});

Route::get('/form-JurusanTKJ', function () {
    return view('JurusanTKJ');
});

Route::get('/form-JurusanAkuntansi', function () {
    return view('Jurusanakuntansi');
});

Route::get('/form-JurusanFarmasi', function () {
    return view('JurusanFarmasi');
});

Route::get('/form-JurusanTLM', function () {
    return view('JurusanTLM');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

// Route::get('/struktur', function () {
//     return view('bagan_sekolah');
// });

Route::get('/struktur', [DataController::class, 'dataGuru']);
//admin
Route::get('/admin', function () {
    return view('admin.home');
})->middleware('auth');

Route::get('/admin/guru/add', function () {
    return view('admin.add_guru');
})->middleware('auth');

Route::get('/admin/guru', [AdminController::class, 'adminDataGuru']);
Route::post('/admin/guru/add/proses', [AdminController::class, 'addDataGuru']);
Route::get('/admin/guru/edit/{kode}', [AdminController::class, 'detailDataGuru']);
Route::post('/admin/guru/edit/proses/{kode}', [AdminController::class, 'editDataGuru']);
Route::get('/admin/guru/hapus/{kode}', [AdminController::class, 'hapusDataGuru']);

Route::get('/admin/calonsiswa', [AdminController::class, 'dataCalonSiswa']);
Route::get('/admin/calonsiswa/detail/{kode}', [AdminController::class, 'detailDataCalonSiswa']);
Route::get('/admin/calonsiswa/edit/{kode}', [AdminController::class, 'editDetailDataCalonSiswa']);
Route::post('/admin/calonsiswa/edit/proses/{kode}', [AdminController::class, 'editDataCalonSiswa']);
Route::post('/admin/calonsiswa/konfirmbayar/{kode}', [AdminController::class, 'konfirmasiPembayaranCalonSiswa']);
Route::get('/admin/calonsiswa/hapus/{kode}', [AdminController::class, 'hapusDataCalonSiswa']);
