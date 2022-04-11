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
    return view('landingPage');
})->name('home');

Route::get('/classic', function () {
    return view('classic');
})->name('classic');

Route::get('/rock', function () {
    return view('rock');
})->name('rock');

Route::get('/progr', function () {
    return view('progr');
})->name('progr');;

Route::get('/jazz', function () {
    return view('jazz');
})->name('jazz');;
