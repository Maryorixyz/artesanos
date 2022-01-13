<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', App\Http\Controllers\Invitado\HomeController::class)->name('inicio');

Route::get('/catalogo', [App\Http\Controllers\Invitado\CatalogoController::class,'index'])->name('catalogo');

Route::get('/catalogo/productos/{inicio}', [App\Http\Controllers\Invitado\CatalogoController::class,'productos'])->name('catalogo.productos');

Route::view('/nosotros', 'nosotros')->name('nosotros');

Route::view('/contactanos', 'contactanos')->name('contactanos');

Route::get('/asociaciones', [App\Http\Controllers\Invitado\AsociacionController::class, 'index'])->name('asociaciones.index');

Route::get('/asociaciones/{id}', [App\Http\Controllers\Invitado\AsociacionController::class, 'detalle'])->name('asociaciones.detalle');

Route::get('asociaciones/create', [App\Http\Controllers\AsociacionController::class,'create'])->name('asociaciones.create');

Route::get('asociaciones/{asociacion}', [App\Http\Controllers\AsociacionController::class,'show'])->name('asociaciones.show');

Route::get('artesanos/{id}', [App\Http\Controllers\Invitado\ArtesanoController::class, 'perfil'])->name('artesanos.perfil');

Route::get('artesanos/{id}', [App\Http\Controllers\Invitado\ArtesanoController::class, 'perfil'])->name('artesanos.perfil');



Route::get('productos/{id}', [App\Http\Controllers\Invitado\ProductoController::class, 'detalle'])->name('productos.detalle');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
