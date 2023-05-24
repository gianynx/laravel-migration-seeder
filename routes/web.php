<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('pages.home');

Route::get('/frecce', function () {
    return view('pages.frecce');
})->name('pages.frecce');

Route::get('/intercity', function () {
    return view('pages.intercity');
})->name('pages.intercity');

Route::get('/regionale', function () {
    return view('pages.regionale');
})->name('pages.regionale');

Route::get('/info', function () {
    return view('pages.info');
})->name('pages.info');
