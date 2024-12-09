<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

route::get('/posts', [PostController::class, 'index'])->name('post.index');

route::middleware(['auth'])->group(function () {
    
    route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
route::middleware('guest')->group(function () {
    route::view('register', 'register');
    route::view('login', 'login');
    
});

route::post('/login', [AuthController::class, 'login'])->name('login');
route::post('/register', [AuthController::class, 'register'])->name('register');

// =====================================================================
Route::get('/form', function () {
    return view('form');
});