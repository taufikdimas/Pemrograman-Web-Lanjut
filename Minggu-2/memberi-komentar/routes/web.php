<?php

use App\Http\Controllers\ItemController; //import class ItemController dari Laravel
use Illuminate\Support\Facades\Route;

//import class Route dari Laravel

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
//route awal default larave;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('items', ItemController::class); //membuat route resource untuk items dari ItemController
