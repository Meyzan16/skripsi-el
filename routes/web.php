<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatakriteriaController;
use App\Http\Controllers\Admin\DataSubkriteriaController;
use App\Http\Controllers\Admin\SubLuasGenanganController;
use App\Http\Controllers\Admin\SubLamanyaGenanganController;
use App\Http\Controllers\Admin\SubKerugianEkonomiController;
use App\Http\Controllers\Admin\SubKerugianDaerahPerumahanController;
use App\Http\Controllers\Admin\SubFrekuensiGenanganController;
use App\Http\Controllers\Admin\SubGangguanTransportasiController;
use App\Http\Controllers\Admin\SubHakMilikPribadiController;
use App\Http\Controllers\Admin\SubGangguanSosialController;

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

Route::get('/', function () {
    return view('welcome');
});

//SISWA
Route::group([
    'prefix' => 'admin/'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/data-kriteria', DatakriteriaController::class);
    Route::resource('/data-sub-kriteria', DataSubkriteriaController::class);
    Route::resource('/data-luas-genangan', SubLuasGenanganController::class);
    Route::resource('/data-lamanya-genangan', SubLamanyaGenanganController::class);
    Route::resource('/data-kerugian-ekonomi', SubKerugianEkonomiController::class);
    Route::resource('/data-kerugian-daerah-perumahan', SubKerugianDaerahPerumahanController::class);
    Route::resource('/data-frekuensi-genangan', SubFrekuensiGenanganController::class);
    Route::resource('/data-gangguan-transportasi', SubGangguanTransportasiController::class);
    Route::resource('/data-hak-milik-pribadi', SubHakMilikPribadiController::class);
    Route::resource('/data-gangguan-sosial', SubGangguanSosialController::class);

    // Route::group(['prefix'  => 'orang-tua/'],function(){
    //     Route::get('/', [DatakriteriaController::Class, 'index'])->name('admin.biodata-diri.index');
    //     // Route::get('{nisn}/show', [DatakriteriaController::Class, 'show'])->name('admin.data-ortu.show');
    //     // Route::get('{nisn}/edit', [DatakriteriaController::Class, 'edit'])->name('admin.data-ortu.edit');
    //     // Route::patch('{nisn}/update', [DatakriteriaController::Class, 'update'])->name('admin.data-ortu.update');
    //     // //verifikasi data biodata diri
    //     // Route::patch('{nisn}/verifikasiOrangtua', [DatakriteriaController::Class, 'verifikasi'])->name('admin.data-ortu.verifikasi');
    //     // Route::patch('{nisn}/verifikasiOrangtuaTolak', [DatakriteriaController::Class, 'verifikasi_tolak'])->name('admin.data-ortu.verifikasi_tolak');
    // });


});
