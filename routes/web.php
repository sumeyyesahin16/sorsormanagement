<?php

use App\Http\Controllers\OldControllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/',[\App\Http\Controllers\Dashboard\DashboardController::class,'index']);
Route::get('/index',[\App\Http\Controllers\Dashboard\DashboardController::class,'index']);

