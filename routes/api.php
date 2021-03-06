<?php

use App\Http\Controllers\Invitado\ArtesanoController;
use App\Http\Controllers\Invitado\AsociacionController;
use App\Http\Controllers\Invitado\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/buscador_asociaciones', [AsociacionController::class, 'buscadorAsociaciones']);

Route::get('/buscador_artesanos/{idAsociacion}', [ArtesanoController::class, 'buscadorArtesanos']);

Route::post('/obtener_favoritos', [ProductoController::class, 'obtenerFavoritos']);