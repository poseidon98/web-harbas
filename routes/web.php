<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EkskulController;
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

Route::get('/', [HomeController::class, 'Index']);


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

Route::get('/prestasi', [HomeController::class, 'prestasi']);


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
Route::get('/admin/calonsiswa/cetak/excel', [AdminController::class, 'exportExcel']);
Route::get('/admin/calonsiswa/cetak/pdf/{kode}', [AdminController::class, 'cetakPDF']);


Route::get('/admin/prestasi', [PrestasiController::class, 'adminDataPrestasi']);
Route::get('/admin/prestasi/add', function () {
    return view('admin/prestasi.add_prestasi');
})->middleware('auth');
Route::post('/admin/prestasi/add/proses', [PrestasiController::class, 'addDataPrestasi']);
Route::get('/admin/prestasi/edit/{kode}', [PrestasiController::class, 'detailDataPrestasi']);
Route::post('/admin/prestasi/edit/proses/{kode}', [PrestasiController::class, 'editDataPrestasi']);
Route::get('/admin/prestasi/hapus/{kode}', [PrestasiController::class, 'hapusDataPrestasi']);

Route::get('/admin/review', [ReviewController::class, 'adminDataReview']);
Route::get('/admin/review/add', function () {
    return view('admin/review.add_review');
})->middleware('auth');
Route::post('/admin/review/add/proses', [ReviewController::class, 'addDataReview']);
Route::get('/admin/review/edit/{kode}', [ReviewController::class, 'detailDataReview']);
Route::post('/admin/review/edit/proses/{kode}', [ReviewController::class, 'editDataReview']);
Route::get('/admin/review/hapus/{kode}', [ReviewController::class, 'hapusDataReview']);


Route::get('/admin/affiliate', [AffiliateController::class, 'adminAffiliate']);
Route::get('/admin/affiliate/add', function () {
    return view('admin/affiliate.add_affiliate');
})->middleware('auth');
Route::post('/admin/affiliate/add/proses', [AffiliateController::class, 'addDataAffiliate']);
Route::get('/admin/affiliate/edit/{kode}', [AffiliateController::class, 'detailAffiliate']);
Route::post('/admin/affiliate/edit/proses/{kode}', [AffiliateController::class, 'editAffiliate']);
Route::get('/admin/affiliate/hapus/{kode}', [AffiliateController::class, 'hapusAffiliate']);

Route::get('/admin/ekskul', [EkskulController::class, 'adminEkskul']);
Route::get('/admin/ekskul/add', function () {
    return view('admin/ekskul.add_ekskul');
})->middleware('auth');
Route::post('/admin/ekskul/add/proses', [EkskulController::class, 'addDataEkskul']);
Route::get('/admin/ekskul/edit/{kode}', [EkskulController::class, 'detailEkskul']);
Route::post('/admin/ekskul/edit/proses/{kode}', [EkskulController::class, 'editEkskul']);
Route::get('/admin/ekskul/hapus/{kode}', [EkskulController::class, 'hapusEkskul']);

Route::get('/kirimemail', [DataController::class, 'KonfirmasiEmail']);

// END
Route::get('admin/clear/cache', function () {
    \Artisan::call('view:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    return ("Cache clear successfull");
});
