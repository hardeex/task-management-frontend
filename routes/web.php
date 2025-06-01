<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// user routes
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/getting-started', [UserController::class, 'gettingStarted'])->name('get-started');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/terms', [UserController::class, 'terms'])->name('terms');
Route::get('/privacy', [UserController::class, 'privacy'])->name('privacy');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');



// authenticstion controller
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login-with-google', [AuthController::class, 'loginWithGoogle'])->name('login.google');
Route::get('/login-with-microsoft', [AuthController::class, 'loginWithGoogle'])->name('login.microsoft');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.request');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');



// task management routes
Route::get('/create-tasks', [TasksController::class, 'createTask'])->name('create-task');
Route::get('/create-workspace', [TasksController::class, 'createWorkspace'])->name('workspace');
Route::get('/invite-team', [TasksController::class, 'inviteTeam'])->name('invite-team');
