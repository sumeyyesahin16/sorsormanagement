<?php
use Illuminate\Support\Facades\Route;


Route::any('commission',[\App\Http\Controllers\User\UserController::class,'commission']);
Route::any('tracking',[\App\Http\Controllers\User\UserController::class,'tracking']);
Route::any('/',[\App\Http\Controllers\User\UserController::class,'index']);




