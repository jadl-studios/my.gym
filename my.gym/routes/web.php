<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAlunoController;
use App\Http\Controllers\LoginProfessorController;
use App\Http\Controllers\AreaAlunoController;
use App\Http\Controllers\AreaProfessorController;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Login Aluno
Route::get('/login-aluno', [LoginAlunoController::class, 'index'])->name('login.aluno');
Route::post('/login-aluno', [LoginAlunoController::class, 'login'])->name('login.aluno.post');

// Login Professor
Route::get('/login-professor', [LoginProfessorController::class, 'index'])->name('login.professor');
Route::post('/login-professor', [LoginProfessorController::class, 'login'])->name('login.professor.post');

Route::get('/area-aluno', [AreaAlunoController::class, 'index'])->name('area.aluno');
Route::get('/area-professor', [AreaProfessorController::class, 'index'])->name('area.professor');
