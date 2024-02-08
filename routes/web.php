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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/transaksi', function () {
    return view('pages.transaksi');
});
Route::get('/produk', function () {
    return view('pages.produk');
});
Route::get('/kredit', function () {
    return view('pages.kredit');
});
