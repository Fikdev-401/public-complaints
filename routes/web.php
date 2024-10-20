<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ComplaintResponseController;
use App\Http\Middleware\EnsureUserIsAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::get('/complaints', [ComplaintController::class, 'index'])->middleware(EnsureUserIsAuthenticated::class)->name('complaints.index');
Route::get('/complaints/create', [ComplaintController::class, 'create'])->name('complaints.create');
Route::post('/complaints', [ComplaintController::class, 'store'])->name('complaints.store');


Route::get('/response-complaints', [ComplaintResponseController::class, 'index'])->name('complaints.response.index');
Route::get('/response-complaints/create', [ComplaintResponseController::class, 'create'])->name('complaints.response.create');
Route::post('/response-complaints', [ComplaintResponseController::class, 'store'])->name('complaints.response.store');


Route::get('/profile',[HomeController::class , 'profile'])->name('profile.index');
