<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
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

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::get('kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');

// JS4: Praktikum 2.6
Route::get('/level', [LevelController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);