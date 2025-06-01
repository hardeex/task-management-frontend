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
Route::get('/settings', [AuthController::class, 'settings'])->name('setting');



// task management routes
Route::get('/tasks', [TasksController::class, 'tasks'])->name('create-task');
Route::get('/create-workspace', [TasksController::class, 'createWorkspace'])->name('workspace');
Route::get('/invite-team', [TasksController::class, 'Team'])->name('invite-team');
Route::get('/create-project', [TasksController::class, 'createProject'])->name('create-project');
Route::get('/projects-details', [TasksController::class, 'projects'])->name('projects');
Route::get('/calendar', [TasksController::class, 'calendar'])->name('calendar');
Route::get('/report', [TasksController::class, 'reports'])->name('report');
