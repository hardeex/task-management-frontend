<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// user routes
Route::get('/', [UserController::class, 'index'])->name('index');