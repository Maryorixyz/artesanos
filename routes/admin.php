<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AsociacionController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.inicio');
Route::resource('Asociacion', AsociacionController::class)->names('admin.asociacion');
Route::resource('producto', ProductoController::class)->names('admin.producto');
Route::resource('users', UserController::class)->names('admin.users');
