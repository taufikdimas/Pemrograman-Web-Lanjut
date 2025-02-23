<?php

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
//Basic Route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

// Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('mahasiswa', function ($id) {
});
Route::post('mahasiswa', function ($id) {
});
Route::put('mahasiswa', function ($id) {
});
Route::delete('mahasiswa', function ($id) {
});
Route::get('mahasiswa/{id}', function ($id) {
});
Route::put('mahasiswa/{id}', function ($id) {
});
Route::delete('mahasiswa/{id}', function ($id) {
});

Route::match(['get', 'post'], '/specialUrl', function () {
});
Route::any('/specialMahasiswa', function ($id) {
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/welcome', function () {
    return 'Selamat Datang Mina-san';
});

Route::get('/about', function () {
    return 'NIM : 2341720062 <br> Nama : Taufik Dimas Edystara';
});

//Route Optional Parameter

Route::get('/user/{name}', function ($name) { //route dengan parameter
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { //route lebih dari 1 parameter
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/artikel/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/user/{name?}', function ($name = 'Taufik') {
    return 'Nama saya ' . $name;
});
