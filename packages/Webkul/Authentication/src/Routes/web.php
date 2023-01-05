<?php

use Illuminate\Support\Facades\Route;
use Webkul\Authentication\Http\Controllers\RoleController;

/**
 * Roles.
 */
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');

Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');

Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');

Route::get('/roles/{id}', [RoleController::class, 'show'])->name('roles.show');

Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');

Route::put('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');

Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
