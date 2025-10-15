<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuardiansController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ClassroomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/guardian', [GuardiansController::class, 'index']);
Route::get('/profil', [ProfileController::class, 'profil']);
Route::get('/kontak', [KontakController::class, 'kontak']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/subject', [SubjectController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
