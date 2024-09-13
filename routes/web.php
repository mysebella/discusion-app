<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::view('/auth/login', 'auth.login');
Route::post('/auth/login', [UserController::class, 'login']);

Route::view('/auth/register', 'auth.register');
Route::post('/auth/register', [UserController::class, 'register']);

Route::post('posting', [PostController::class, 'store']);

Route::view('/', 'beranda', ['posts' => Post::with('user')->orderBy('id', 'DESC')->get()]);
