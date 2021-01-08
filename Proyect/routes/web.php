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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::view('juego', 'juego')->name('juego');
Route::view('album', 'album')->name('album');
Route::view('intercambio', 'intercambio')->name('intercambio');


Route::get('/homeAdmin', [App\Http\Controllers\AdminController::class, 'indexAdmin']);

Route::resource('/adminUsers', 'App\Http\Controllers\AdminUserController');

Route::get('/adminTematicas', [App\Http\Controllers\TematicaController::class, 'tematicasAdmin']);
Route::get('/uploadCromos', [App\Http\Controllers\CromController::class, 'cromosAdmin']);
Route::get('/uploadPreguntas', [App\Http\Controllers\PreguntController::class, 'preguntasAdmin']);