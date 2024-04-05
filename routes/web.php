<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/tagihan', [HomeController::class, 'tagihan'])->name('user.tagihan');
Route::get('/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/tambah', [HomeController::class, 'tambah'])->name('user.tambah');

Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('user.update');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');