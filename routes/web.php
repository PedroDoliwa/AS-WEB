<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('alunos', [AlunoController::class, 'index'])->middleware(['auth', 'verified'])->name('index-alunos');
Route::get('alunos/create', [AlunoController::class, 'create'])->middleware(['auth', 'verified'])->name('create-alunos');
Route::post('alunos', [AlunoController::class, 'store'])->middleware(['auth', 'verified'])->name('store-alunos');
Route::get('alunos/{id}/edit', [AlunoController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-alunos');
Route::put('alunos/{id}', [AlunoController::class, 'update'])->middleware(['auth', 'verified'])->name('update-alunos');
Route::delete('alunos/{id}', [AlunoController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-alunos');

Route::get('cursos', [CursoController::class, 'index'])->middleware(['auth', 'verified'])->name('index-cursos');
Route::get('cursos/create', [CursoController::class, 'create'])->middleware(['auth', 'verified'])->name('create-cursos');
Route::post('cursos', [CursoController::class, 'store'])->middleware(['auth', 'verified'])->name('store-cursos');
Route::get('cursos/{id}/edit', [CursoController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-cursos');
Route::put('cursos/{id}', [CursoController::class, 'update'])->middleware(['auth', 'verified'])->name('update-cursos');
Route::delete('cursos/{id}', [CursoController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-cursos');

Route::get('professors', [ProfessorController::class, 'index'])->middleware(['auth', 'verified'])->name('index-professors');
Route::get('professors/create', [ProfessorController::class, 'create'])->middleware(['auth', 'verified'])->name('create-professors');
Route::post('professors', [ProfessorController::class, 'store'])->middleware(['auth', 'verified'])->name('store-professors');
Route::get('professors/{id}/edit', [ProfessorController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-professors');
Route::put('professors/{id}', [ProfessorController::class, 'update'])->middleware(['auth', 'verified'])->name('update-professors');
Route::delete('professors/{id}', [ProfessorController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-professors');

Route::get('disciplinas', [DisciplinaController::class, 'index'])->middleware(['auth', 'verified'])->name('index-disciplinas');
Route::get('disciplinas/create', [DisciplinaController::class, 'create'])->middleware(['auth', 'verified'])->name('create-disciplinas');
Route::post('disciplinas', [DisciplinaController::class, 'store'])->middleware(['auth', 'verified'])->name('store-disciplinas');
Route::get('disciplinas/{id}/edit', [DisciplinaController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-disciplinas');
Route::put('disciplinas/{id}', [DisciplinaController::class, 'update'])->middleware(['auth', 'verified'])->name('update-disciplinas');
Route::delete('disciplinas/{id}', [DisciplinaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-disciplinas');