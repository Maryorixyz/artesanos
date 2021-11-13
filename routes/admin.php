<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\admin\AsociacionController;
use App\Http\Controllers\admin\ProductoController;

Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.inicio');
Route::resource('Asociacion', AsociacionController::class)->names('admin.asociacion');
Route::resource('producto', ProductoController::class)->names('admin.producto');