<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TagihanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');

// Route::get('/tagihan', [HomeController::class, 'tagihan'])->name('user.tagihan');
Route::get('/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/tambah', [HomeController::class, 'tambah'])->name('user.tambah');

Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('user.update');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nis}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nis}/update', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nis}/delete', [SiswaController::class, 'delete'])->name('siswa.delete');



Route::get('/tagihan', [TagihanController::class, 'index'])->name('tagihan.index');
Route::get('/tagihan/create', [TagihanController::class, 'create'])->name('tagihan.create');
Route::post('/tagihan/store', [TagihanController::class, 'store'])->name('tagihan.store');
Route::get('/tagihan/{idtagihan}/edit', [TagihanController::class, 'edit'])->name('tagihan.edit');
Route::put('/tagihan/{idtagihan}/update', [TagihanController::class, 'update'])->name('tagihan.update');
Route::delete('/tagihan/{idtagihan}/delete', [TagihanController::class, 'delete'])->name('tagihan.delete');