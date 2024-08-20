<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController, OkrController, HelloWorldController, UserController};

Route::get('/', [HelloWorldController::class, 'index'])->name('hello_world.index');
Route::get('/okrs', [OkrController::class, 'index'])->name('okr.index');
Route::prefix('users')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
});

Route::post('/auth', [AuthController::class, 'login'])->name('auth.login');
