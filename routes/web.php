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
    return view('welcome');
});

Auth::routes();

Route::view('welcome', 'welcome')->name('welcome');
Route::view('home', 'home')->name('home');
Route::view('juego', 'juego')->name('juego');
Route::view('album', 'album')->name('album');
Route::view('intercambio', 'intercambio')->name('intercambio');
Route::view('homeAdmin', 'homeAdmin')->name('homeAdmin');
Route::view('adminUsers', 'adminUsers')->name('adminUsers');
Route::view('adminTematicas', 'adminTematicas')->name('adminTematicas');
Route::view('uploadCromos', 'uploadCromos')->name('uploadCromos');
Route::view('uploadPreguntas', 'uploadPreguntas')->name('uploadPreguntas');