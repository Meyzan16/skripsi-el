<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatakriteriaController;
use App\Http\Controllers\Admin\DataSubkriteriaController;

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

});
