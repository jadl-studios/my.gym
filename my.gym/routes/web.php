<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaAlunoController;
use App\Http\Controllers\AreaProfessorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAlunoController;
use App\Http\Controllers\LoginProfessorController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/login-aluno', [LoginAlunoController::class, 'index']);
Route::get('/area-aluno', [AreaAlunoController::class, 'index']);
Route::get('/login-professor', [LoginProfessorController::class, 'index']);
Route::get('/area-professor', [AreaProfessorController::class, 'index']);