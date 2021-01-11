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
Route::view('macro', 'macro')->name('macro');
Route::view('micro', 'micro')->name('micro');
Route::view('lev1', 'lev1')->name('lev1');
Route::view('econ', 'econ')->name('econ');
Route::view('intercambio', 'intercambio')->name('intercambio');

Route::resource('/homeAdmin', 'App\Http\Controllers\AdminController');

Route::resource('/administrador/adminUsers', 'App\Http\Controllers\AdminUserController');
Route::get('/administrador/adminUsers/{id}/destroy', 
    ['uses' => 'App\Http\Controllers\AdminUserController@destroy',
    'as' => 'adminUsers.destroy'
]);

Route::resource('/administrador/adminTematicas', 'App\Http\Controllers\TematicaController');
Route::get('/administrador/adminTematicas/{id}/destroy', 
    ['uses' => 'App\Http\Controllers\TematicaController@destroy',
    'as' => 'adminTematicas.destroy'
]);

Route::resource('/administrador/uploadCromos', 'App\Http\Controllers\CromController');

Route::resource('/administrador/uploadPreguntas', 'App\Http\Controllers\PreguntController');