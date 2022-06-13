<?php

use Illuminate\Support\Facades\Route;

Route::get('/login',[\App\Http\Controllers\Admin\AdminController::class,'login'])->name('login');
Route::post('/loginResult',[\App\Http\Controllers\Admin\AdminController::class,'loginCheck'])->name('loginCheck');
Route::get('/logout',[\App\Http\Controllers\Admin\AdminController::class,'logOut'])->name('logout');

Route::get('/error',[\App\Http\Controllers\Admin\AdminController::class,'error'])->name('error');

