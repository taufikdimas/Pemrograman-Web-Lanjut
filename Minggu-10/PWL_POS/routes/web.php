<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::pattern('id', '[0-9]+'); //artinya ketika ada parameter {id}, maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'postregister']);

Route::middleware(['auth'])->group(function () { //artinya semua route di dalam group ini harus login dulu

    // masukkan semua route yang perlu autentikasi disini
    Route::get('/', [WelcomeController::class, 'index']);

    // route level
    // artinya sema route di dalam group ini harus punya role ADM (Administrator)
    Route::middleware(['authorize:ADM'])->group(function () {
        Route::get('/level', [LevelController::class, 'index']);
        Route::post('/level/list', [LevelController::class, 'list']);
        Route::get('/level/create', [LevelController::class, 'create']);
        Route::post('/level', [LevelController::class, 'store']);
        Route::get('/level/create_ajax', [LevelController::class, 'create_ajax']);
        Route::post('/level/ajax', [LevelController::class, 'store_ajax']);
        Route::get('/level/{id}', [LevelController::class, 'show']);
        Route::get('/level/{id}/show_ajax', [LevelController::class, 'show_ajax']);
        Route::get('/level/{id}/edit', [LevelController::class, 'edit']);
        Route::put('/level/{id}', [LevelController::class, 'update']);
        Route::get('/level/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
        Route::put('/level/{id}/update_ajax', [LevelController::class, 'update_ajax']);
        Route::get('/level/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
        Route::delete('/level/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
        Route::delete('/level/{id}', [LevelController::class, 'destroy']);
        Route::get('/level/import', [LevelController::class, 'import']);
        Route::post('/level/import_ajax', [LevelController::class, 'import_ajax']);
        Route::get('/level/export_excel', [LevelController::class, 'export_excel']);
        Route::get('/level/export_pdf', [LevelController::class, 'export_pdf']);
    });

    // route user
    Route::middleware(['authorize:ADM'])->group(function () {
        Route::get('/user/', [UserController::class, 'index']);
        Route::post('/user/list', [UserController::class, 'list']);
        Route::get('/user/create', [UserController::class, 'create']);
        Route::post('/user/', [UserController::class, 'store']);
        Route::get('/user/create_ajax', [UserController::class, 'create_ajax']);
        Route::post('/user/ajax', [UserController::class, 'store_ajax']);
        Route::get('/user/{id}', [UserController::class, 'show']);
        Route::get('/user/{id}/edit', [UserController::class, 'edit']);
        Route::put('/user/{id}', [UserController::class, 'update']);
        Route::get('/user/{id}/show_ajax', [UserController::class, 'show_ajax']);
        Route::get('/user/{id}/edit_ajax', [UserController::class, 'edit_ajax']);
        Route::put('/user/{id}/update_ajax', [UserController::class, 'update_ajax']);
        Route::get('/user/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);
        Route::delete('/user/{id}/delete_ajax', [UserController::class, 'delete_ajax']);
        Route::delete('/user/{id}', [UserController::class, 'destroy']);
        Route::get('/user/import', [UserController::class, 'import']);
        Route::post('/user/import_ajax', [UserController::class, 'import_ajax']);
        Route::get('/user/export_excel', [UserController::class, 'export_excel']);
        Route::get('/user/export_pdf', [UserController::class, 'export_pdf']);
    });

    // Route Barang
    // artinya semua route di dalam group ini harus punya role ADM dan MNG
    Route::middleware(['authorize:ADM,MNG'])->group(function () {
        Route::get('/barang', [BarangController::class, 'index']);
        Route::post('/barang/list', [BarangController::class, 'list']);
        Route::get('/barang/create', [BarangController::class, 'create']);
        Route::post('/barang/', [BarangController::class, 'store']);
        Route::get('/barang/create_ajax', [BarangController::class, 'create_ajax']);
        Route::post('/barang/ajax', [BarangController::class, 'store_ajax']);
        Route::get('/barang/{id}', [BarangController::class, 'show']);
        Route::get('/barang/{id}/show_ajax', [BarangController::class, 'show_ajax']);
        Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
        Route::put('/barang/{id}', [BarangController::class, 'update']);
        Route::get('/barang/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
        Route::put('/barang/{id}/update_ajax', [BarangController::class, 'update_ajax']);
        Route::get('/barang/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
        Route::delete('/barang/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
        Route::delete('/barang/{id}', [BarangController::class, 'destroy']);
        Route::get('/barang/import', [BarangController::class, 'import']);
        Route::post('/barang/import_ajax', [BarangController::class, 'import_ajax']);
        Route::get('/barang/export_excel', [BarangController::class, 'export_excel']);
        Route::get('/barang/export_pdf', [BarangController::class, 'export_pdf']);
    });

    // kategori
    Route::middleware(['authorize:ADM,MNG'])->group(function () {
        Route::get('/kategori', [KategoriController::class, 'index']);
        Route::post('/kategori/list', [KategoriController::class, 'list']);
        Route::get('/kategori/create', [KategoriController::class, 'create']);
        Route::post('/kategori/', [KategoriController::class, 'store']);
        Route::get('/kategori/create_ajax', [KategoriController::class, 'create_ajax']);
        Route::post('/kategori/ajax', [KategoriController::class, 'store_ajax']);
        Route::get('/kategori/{id}', [KategoriController::class, 'show']);
        Route::get('/kategori/{id}/show_ajax', [KategoriController::class, 'show_ajax']);
        Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
        Route::put('/kategori/{id}', [KategoriController::class, 'update']);
        Route::get('/kategori/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
        Route::put('/kategori/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
        Route::get('/kategori/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
        Route::delete('/kategori/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
        Route::delete('/kategori/{id}', [KategoriController::class, 'destroy']);
        Route::get('/kategori/import', [KategoriController::class, 'import']);             // menampilkan halaman form upload excel kategori ajax
        Route::post('/kategori/import_ajax', [KategoriController::class, 'import_ajax']);  // menyimpan import excel kategori ajax
        Route::get('/kategori/export_excel', [KategoriController::class, 'export_excel']); // menampilkan halaman form export excel kategori
        Route::get('/kategori/export_pdf', [KategoriController::class, 'export_pdf']);     // menampilkan halaman form export pdf kategori
    });

    Route::middleware(['authorize:ADM,MNG'])->group(function () {
        Route::get('/supplier', [SupplierController::class, 'index']);
        Route::post('/supplier/list', [SupplierController::class, 'list']);
        Route::get('/supplier/create', [SupplierController::class, 'create']);
        Route::post('/supplier/', [SupplierController::class, 'store']);
        Route::get('/supplier/create_ajax', [SupplierController::class, 'create_ajax']);
        Route::post('/supplier/ajax', [SupplierController::class, 'store_ajax']);
        Route::get('/supplier/{id}', [SupplierController::class, 'show']);
        Route::get('/supplier/{id}/show_ajax', [SupplierController::class, 'show_ajax']);
        Route::get('/supplier/{id}/edit', [SupplierController::class, 'edit']);
        Route::put('/supplier/{id}', [SupplierController::class, 'update']);
        Route::get('/supplier/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
        Route::put('/supplier/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
        Route::get('/supplier/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
        Route::delete('/supplier/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
        Route::delete('/supplier/{id}', [SupplierController::class, 'destroy']);
    });

    Route::middleware(['authorize:ADM,MNG,STF'])->group(function () {
        // Route Stok
        Route::get('/stok', [StokController::class, 'index']);
        Route::post('/stok/list', [StokController::class, 'list']);
        Route::get('/stok/create', [StokController::class, 'create']);
        Route::post('/stok', [StokController::class, 'store']);
        Route::get('/stok/create_ajax', [StokController::class, 'create_ajax']);
        Route::post('/stok/ajax', [StokController::class, 'store_ajax']);
        Route::get('/stok/{id}', [StokController::class, 'show']);
        Route::get('/stok/{id}/show_ajax', [StokController::class, 'show_ajax']);
        Route::get('/stok/{id}/edit', [StokController::class, 'edit']);
        Route::put('/stok/{id}', [StokController::class, 'update']);
        Route::get('/stok/{id}/edit_ajax', [StokController::class, 'edit_ajax']);
        Route::put('/stok/{id}/update_ajax', [StokController::class, 'update_ajax']);
        Route::get('/stok/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);
        Route::delete('/stok/{id}/delete_ajax', [StokController::class, 'delete_ajax']);
        Route::delete('/stok/{id}', [StokController::class, 'destroy']);
        Route::get('/stok/import', [StokController::class, 'import']);
        Route::post('/stok/import_ajax', [StokController::class, 'import_ajax']);
        Route::get('/stok/export_excel', [StokController::class, 'export_excel']);
        Route::get('/stok/export_pdf', [StokController::class, 'export_pdf']);
    });

    Route::middleware(['authorize:ADM,MNG,STF'])->group(function () {
        Route::get('/penjualan', [PenjualanController::class, 'index']);
        Route::post('/penjualan/list', [PenjualanController::class, 'list']);
        Route::get('/penjualan/create', [PenjualanController::class, 'create']);
        Route::post('/penjualan/', [PenjualanController::class, 'store']);
        Route::get('/penjualan/create_ajax', [PenjualanController::class, 'create_ajax']);
        Route::post('/penjualan/ajax', [PenjualanController::class, 'store_ajax']);
        Route::get('/penjualan/{id}', [PenjualanController::class, 'show']);
        Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit']);
        Route::put('/penjualan/{id}', [PenjualanController::class, 'update']);
        Route::get('/penjualan/{id}/show_ajax', [PenjualanController::class, 'show_ajax']);
        Route::get('/penjualan/{id}/edit_ajax', [PenjualanController::class, 'edit_ajax']);
        Route::put('/penjualan/{id}/update_ajax', [PenjualanController::class, 'update_ajax']);
        Route::get('/penjualan/{id}/delete_ajax', [PenjualanController::class, 'confirm_ajax']);
        Route::delete('/penjualan/{id}/delete_ajax', [PenjualanController::class, 'delete_ajax']);
        Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy']);
        Route::get('/penjualan/export_pdf', [PenjualanController::class, 'export_pdf']);
        Route::get('/penjualan/{id}/struk_pdf', [PenjualanController::class, 'struk_pdf'])->name('penjualan.struk_pdf');

    });

});

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

// Route::get('/level',[LevelController::class,'index']);
// Route::get('/kategori',[KategoriController::class,'index']);
// Route::get('/user',[UserController::class,'index']);

// Route::get('/user/tambah',[UserController::class,'tambah']);
// Route::get('/user/tambah_simpan',[UserController::class,'tambah_simpan']);

// Route::get('/user/ubah/{id}',[UserController::class,'ubah']);
// Route::put('/user/ubah_simpan/{id}',[UserController::class,'ubah_simpan']);

// Route::get('/user/hapus/{id}',[UserController::class,'hapus']);

// Route::group(['prefix' => 'user'], function () {
//    Route::get('/',[UserController::class,'index']);
//    Route::post('/list',[UserController::class,'list']);
//    Route::get('/create',[UserController::class,'create']);
//    Route::post('/',[UserController::class,'store']);
//    Route::get('/create_ajax',[UserController::class,'create_ajax']);
//    Route::post('/ajax',[UserController::class,'store_ajax']);
//    Route::get('/{id}',[UserController::class,'show']);
//    Route::get('/{id}/edit',[UserController::class,'edit']);
//    Route::put('/{id}',[UserController::class,'update']);
//    Route::get('/{id}/show_ajax',[UserController::class,'show_ajax']);
//    Route::get('/{id}/edit_ajax', [UserController::class,'edit_ajax']);
//    Route::put('/{id}/update_ajax', [UserController::class,'update_ajax']);
//    Route::get('/{id}/delete_ajax', [UserController::class,'confirm_ajax']);
//    Route::delete('/{id}/delete_ajax', [UserController::class,'delete_ajax']);
//    Route::delete('/{id}',[UserController::class,'destroy']);
// });

// Route level lama
// Route::group(['prefix' => 'level'], function(){
//    Route::get('/', [LevelController::class, 'index']);
//    Route::post('/list', [LevelController::class, 'list']);
//    Route::get('/create', [LevelController::class, 'create']);
//    Route::post('/', [LevelController::class, 'store']);
//    Route::get('/create_ajax', [LevelController::class, 'create_ajax']);
//    Route::post('/ajax', [LevelController::class, 'store_ajax']);
//    Route::get('/{id}', [LevelController::class, 'show']);
//    Route::get('/{id}/show_ajax', [LevelController::class, 'show_ajax']);
//    Route::get('/{id}/edit', [LevelController::class, 'edit']);
//    Route::put('/{id}', [LevelController::class, 'update']);
//    Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
//    Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);
//    Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
//    Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
//    Route::delete('/{id}', [LevelController::class, 'destroy']);
// });

// Route::group(['prefix' => 'kategori'], function(){
//    Route::get('/', [KategoriController::class, 'index']);
//    Route::post('/list', [KategoriController::class, 'list']);
//    Route::get('/create', [KategoriController::class, 'create']);
//    Route::post('/', [KategoriController::class, 'store']);
//    Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
//    Route::post('/ajax', [KategoriController::class, 'store_ajax']);
//    Route::get('/{id}', [KategoriController::class, 'show']);
//    Route::get('/{id}/show_ajax', [KategoriController::class, 'show_ajax']);
//    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
//    Route::put('/{id}', [KategoriController::class, 'update']);
//    Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
//    Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
//    Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
//    Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
//    Route::delete('/{id}', [KategoriController::class, 'destroy']);
// });

// Route barang lama
// Route::group(['prefix' => 'barang'], function(){
//    Route::get('/', [BarangController::class, 'index']);
//    Route::post('/list', [BarangController::class, 'list']);
//    Route::get('/create', [BarangController::class, 'create']);
//    Route::post('/', [BarangController::class, 'store']);
//    Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
//    Route::post('/ajax', [BarangController::class, 'store_ajax']);
//    Route::get('/{id}', [BarangController::class, 'show']);
//    Route::get('/{id}/show_ajax', [BarangController::class, 'show_ajax']);
//    Route::get('/{id}/edit', [BarangController::class, 'edit']);
//    Route::put('/{id}', [BarangController::class, 'update']);
//    Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
//    Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
//    Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
//    Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
//    Route::delete('/{id}', [BarangController::class, 'destroy']);
// });

// Route::group(['prefix' => 'supplier'], function(){
//    Route::get('/', [SupplierController::class, 'index']);
//    Route::post('/list', [SupplierController::class, 'list']);
//    Route::get('/create', [SupplierController::class, 'create']);
//    Route::post('/', [SupplierController::class, 'store']);
//    Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
//    Route::post('/ajax', [SupplierController::class, 'store_ajax']);
//    Route::get('/{id}', [SupplierController::class, 'show']);
//    Route::get('/{id}/show_ajax', [SupplierController::class, 'show_ajax']);
//    Route::get('/{id}/edit', [SupplierController::class, 'edit']);
//    Route::put('/{id}', [SupplierController::class, 'update']);
//    Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
//    Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
//    Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
//    Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
//    Route::delete('/{id}', [SupplierController::class, 'destroy']);
// });
