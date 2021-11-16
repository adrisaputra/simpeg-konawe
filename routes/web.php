<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataUtamaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RekapitulasiController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\UserController;

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

Route::get('/buat_storage', function () {
    Artisan::call('storage:link');
    dd("Storage Berhasil Di Buat");
});

Route::get('/clear-cache-all', function() {
    Artisan::call('cache:clear');
    dd("Cache Clear All");
});

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/login_w', [LoginController::class, 'authenticate']);
Route::post('/logout-sistem', [LoginController::class, 'logout']);

Route::get('/dashboard', [HomeController::class, 'index']);

## Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/search', [PegawaiController::class, 'search']);
Route::get('/pegawai/detail_data_utama/{data_utama}', [PegawaiController::class, 'detail_data_utama']);
Route::get('/pegawai/detail_orang_tua/{data_utama}', [PegawaiController::class, 'detail_orang_tua']);
Route::get('/pegawai/detail_pasangan/{data_utama}', [PegawaiController::class, 'detail_pasangan']);
Route::get('/pegawai/detail_anak/{data_utama}', [PegawaiController::class, 'detail_anak']);
Route::get('/pegawai/detail_riwayat_golongan/{data_utama}', [PegawaiController::class, 'detail_riwayat_golongan']);
Route::get('/pegawai/detail_riwayat_pendidikan/{data_utama}', [PegawaiController::class, 'detail_riwayat_pendidikan']);
Route::get('/pegawai/detail_riwayat_jabatan/{data_utama}', [PegawaiController::class, 'detail_riwayat_jabatan']);
Route::get('/pegawai/detail_riwayat_skp/{data_utama}', [PegawaiController::class, 'detail_riwayat_skp']);
Route::post('/pegawai/import_excel',[PegawaiController::class, 'import_excel']);
Route::get('/pegawai/data_utama/{nip}',[PegawaiController::class, 'data_utama']);
Route::get('/pegawai/data_orang_tua/{nip}',[PegawaiController::class, 'data_orang_tua']);
Route::get('/pegawai/data_pasangan/{nip}',[PegawaiController::class, 'data_pasangan']);
Route::get('/pegawai/data_anak/{nip}',[PegawaiController::class, 'data_anak']);
Route::get('/pegawai/data_riwayat_golongan/{nip}',[PegawaiController::class, 'data_riwayat_golongan']);
Route::get('/pegawai/data_riwayat_pendidikan/{nip}',[PegawaiController::class, 'data_riwayat_pendidikan']);
Route::get('/pegawai/data_riwayat_jabatan/{nip}',[PegawaiController::class, 'data_riwayat_jabatan']);
Route::get('/pegawai/data_riwayat_skp/{nip}',[PegawaiController::class, 'data_riwayat_skp']);

## Rekapitulasi
Route::get('/rekapitulasi_golongan_pegawai', [RekapitulasiController::class, 'golongan_pegawai']);
Route::get('/rekapitulasi_pendidikan_pegawai', [RekapitulasiController::class, 'pendidikan_pegawai']);
Route::get('/rekapitulasi_esselon_pegawai', [RekapitulasiController::class, 'esselon_pegawai']);
Route::get('/rekapitulasi_Jumlah_pegawai', [RekapitulasiController::class, 'Jumlah_pegawai']);
Route::get('/rekapitulasi_gender_pegawai', [RekapitulasiController::class, 'gender_pegawai']);

## User
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/search', [UserController::class, 'search']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/edit/{user}', [UserController::class, 'edit']);
Route::put('/user/edit/{user}', [UserController::class, 'update']);
Route::get('/user/edit_profil/{user}', [UserController::class, 'edit_profil']);
Route::put('/user/edit_profil/{user}', [UserController::class, 'update_profil']);
Route::get('/user/hapus/{user}',[UserController::class, 'delete']);

## Log Activity
Route::get('/log', [LogController::class, 'index']);
Route::get('/log/search', [LogController::class, 'search']);

## Pengaturan
Route::get('/pengaturan', [PengaturanController::class, 'index']);
Route::put('/pengaturan/edit/{pengaturan}', [PengaturanController::class, 'update']);
