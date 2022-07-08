<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\EstudiantesController;
use App\Http\Controllers\ProfesorController;

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
Route::get('/', [EstudiantesController::class, 'listEstudiantes'])->name('estudiante.list');
Route::get('/estudiante/list', [EstudiantesController::class, 'listEstudiantes'])->name('estudiante.list');
Route::resource('estudiante', EstudiantesController::class);

Route::get('/curso/create', [CursoController::class, 'index'])->name('curso.create');
Route::post('/curso/create', [CursoController::class, 'store'])->name('curso.store');

Route::get('/profesor/create', [ProfesorController::class, 'index'])->name('profesor.create');
Route::post('/profesor/create', [ProfesorController::class, 'store'])->name('profesor.store');


