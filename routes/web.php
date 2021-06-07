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
// Homepage
Route::get('/', function () {
    return view('welcome');
});


// About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Galleria
Route::get('/galleria', function () {
    return view('galleria');
})->name('galleria');

// Contatti
Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');
