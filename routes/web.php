<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.beranda', [
        'url' => 'beranda'
    ]);
});
Route::get('/fitur', function () {
    return view('pages.fitur', [
        'url' => 'fitur'
    ]);
});
Route::get('/harga', function () {
    return view('pages.harga', [
        'url' => 'harga'
    ]);
});

