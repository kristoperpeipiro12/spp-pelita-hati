<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

use App\Http\Controllers\TagihanController;
use Illuminate\Auth\Events\Login;

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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('user.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');


// Route::get('/tagihan', [HomeController::class, 'tagihan'])->name('user.tagihan');
// Route::get('/create', [HomeController::class, 'create'])->name('user.create');
// Route::post('/tambah', [HomeController::class, 'tambah'])->name('user.tambah');

// Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
// Route::post('/update/{id}', [HomeController::class, 'update'])->name('user.update');
// Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nis}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/siswa/{nis}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nis}', [SiswaController::class, 'delete'])->name('siswa.delete');



Route::get('/tagihan', [TagihanController::class, 'index'])->name('tagihan.index');
Route::get('/tagihan/create', [TagihanController::class, 'create'])->name('tagihan.create');
Route::post('/tagihan/store', [TagihanController::class, 'store'])->name('tagihan.store');
Route::get('/tagihan/{idtagihan}/edit', [TagihanController::class, 'edit'])->name('tagihan.edit');
Route::post('/tagihan/{idtagihan}/update', [TagihanController::class, 'update'])->name('tagihan.update');
Route::delete('/tagihan/{idtagihan}/delete', [TagihanController::class, 'destroy'])->name('tagihan.delete');