<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Webkul\Project\Http\Controllers\StudentController;

/**
 * Students.
 */
Route::get('/students', [StudentController::class , 'index'])->name('students.index');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/show/{id}', [StudentController::class, 'show'])->name('students.show');

Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

Route::delete('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/{locale}', function ($locale) {
     App::setLocale($locale);
     return view('project::students.index');
});
