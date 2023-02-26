<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('tagihan')->group(function () {
    // menampilkan list data tagihan
    Route::get('/list', [TagihanController::class, 'index'])->name('tagihan.list');

    // menuju halaman create form data tagihan
    Route::get('/create', [TagihanController::class, 'create'])->name('tagihan.create');

    // save data tagihan
    Route::post('store', [TagihanController::class, 'store'])->name('tagihan.store');
});