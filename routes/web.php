<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/karyawan', [KaryawanController::class, 'tampil'])->name('karyawan.tampil');
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah'])->name('karyawan.tambah');
Route::post('/karyawan/submit', [KaryawanController::class, 'submit'])->name('karyawan.submit');
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::post('/karyawan/{id}/update', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('/karyawan/{id}/delete', [KaryawanController::class, 'delete'])->name('karyawan.delete');


