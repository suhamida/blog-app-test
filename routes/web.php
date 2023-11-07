<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;

Route::get('/',[WebController::class,'home'])->name('home');
Route::get('/category',[WebController::class,'category'])->name('category');
Route::get('/blogs',[WebController::class,'blog'])->name('blogs');
Route::get('/single/{id}',[WebController::class,'single'])->name('single');
Route::get('/about',[WebController::class,'about'])->name('about');
Route::get('/contact',[WebController::class,'contact'])->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
    Route::resource('blog',BlogController::class);
});
