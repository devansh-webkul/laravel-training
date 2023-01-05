<?php

//use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


/*Registration
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome-2', function () {
//     return view('welcome-2');
// });

// Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');

// Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');

// Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');

// Route::get('/roles/{id}', [RoleController::class, 'show'])->name('roles.show');

// Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');

// Route::put('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');

// Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

Route::get('/students', [StudentController::class , 'index'])->name('students.index');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');