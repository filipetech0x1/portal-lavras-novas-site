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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*Route::get('/', function () {
    return view('home') ;
});*/

Route::view('/', 'home' )->name('home');

/*Route::view('/home', 'home' )->name('home');*/

Route::view('/loja', 'loja' )->name('loja');

Route::view('/hospedagem', 'hospedagem' )->name('hospedagem');

Route::view('/cachoeiras', 'cachoeiras' )->name('cachoeiras');

Route::view('/cultura', 'cultura')->name('cultura');

Route::view('/gastronomia', 'gastronomia')->name('gastronomia');
