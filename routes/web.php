<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PenulisController;
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

// Route::get('/buku', function () {
//     return view('welcome');
// });
// Route::get('/penulis', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});


Route::resource('buku',BukuController::class);
Route::resource('penerbit',PenerbitController::class);
Route::resource('penulis',PenulisController::class);

// tabel buku
// table penulis
// table penerbit
