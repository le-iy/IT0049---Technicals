<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

Route::get('/', [PageController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
