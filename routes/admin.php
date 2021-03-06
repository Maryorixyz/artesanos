<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AsociacionController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\RoleController;

Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->middleware('can:admin.inicio')->name('admin.inicio');
Route::resource('asociacion', AsociacionController::class)->names('admin.asociacion');
Route::resource('producto', ProductoController::class)->names('admin.producto');
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');

Route::get('users/{user}/edit-roles', [UserController::class, 'editRoles'])->name('admin.users.editRoles');
Route::put('users/{user}/edit-roles', [UserController::class, 'updateRoles'])->name('admin.users.updateRoles');
Route::resource('users', UserController::class)->except('show')->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');