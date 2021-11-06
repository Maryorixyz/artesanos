<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AsociacionController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', App\Http\Controllers\Invitado\HomeController::class);


Route::get('asociaciones/create', [App\Http\Controllers\AsociacionController::class,'create'])
        ->name('asociaciones.create');

Route::get('asociaciones/{asociacion}', [App\Http\Controllers\AsociacionController::class,'show'])
        ->name('asociaciones.show');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

