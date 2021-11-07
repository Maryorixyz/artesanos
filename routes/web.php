<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AsociacionController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ContactanosController;
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

Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class,'index'])
->name('nosotros');

Route::get('/contactanos', [App\Http\Controllers\ContactanosController::class,'index'])
->name('contactanos');

Route::get('asociaciones/create', [App\Http\Controllers\AsosciacionController::class,'create'])
        ->name('asociaciones.create');

Route::get('asociaciones/{asociacion}', [App\Http\Controllers\AsociacionController::class,'show'])
        ->name('asociaciones.show');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

