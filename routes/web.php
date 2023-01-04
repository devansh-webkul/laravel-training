<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/welcome-2', function () {
    return view('welcome-2');
});

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');

Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');

Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');

Route::get('/roles/{id}', [RoleController::class, 'show'])->name('roles.show');

Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');

Route::put('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');

Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');





Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');

Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');

Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');

Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');