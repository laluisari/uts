<?php

use App\Models\Buss;
use App\Models\Typebus;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\CalonSiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBusController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardTypebusController;

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

//url atau routes endpoint halaman awal
Route::get('/', function () {
    return view('home');
});

//ppdb
Route::get('/dashboard/pendaftar', [CalonSiswaController::class, 'pendaftar']);  //link untuk admin /dashboard/pendaftar
Route::get('calon_siswa/create', [CalonSiswaController::class, 'create'])->name('calon_siswa.create');
Route::post('calon_siswa/store', [CalonSiswaController::class, 'store'])->name('calon_siswa.store');
Route::get('calon_siswa/edit', [CalonSiswaController::class, 'edit'])->name('calon_siswa.edit');
Route::post('calon_siswa/update', [CalonSiswaController::class, 'update'])->name('calon_siswa.update');
Route::post('calon_siswa/destroy', [CalonSiswaController::class, 'update'])->name('calon_siswa.destroy');
Route::get('kelulusan', [CalonSiswaController::class, 'informasiKelulusan'])->name('kelulusan.informasiKelulusan');
