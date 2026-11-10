<?php

use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\GuestCheck;

Route::get('/', [PageController::class,'login'])->name('login');
Route::post("/login",[PageController::class,'postLogin'])->name('login.post');
Route::get('/dashboard', [PageController::class,'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class,'profile'])->name('profile');
Route::get("/pengelolaan",[PageController::class,'pengelolaan'])->name('pengelolaan');
