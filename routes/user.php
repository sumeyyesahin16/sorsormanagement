<?php
use Illuminate\Support\Facades\Route;


Route::any('commission',[\App\Http\Controllers\User\UserController::class,'commission']);
Route::any('verify_requests',[\App\Http\Controllers\User\UserController::class,'verifyRequests']);
Route::any('/',[\App\Http\Controllers\User\UserController::class,'index'])->name('user');

//User Data Service
Route::get('/dataservice',[\App\Http\Controllers\User\UserController::class, 'dataservice'])->name('user_dataservice');
//User Verify Data Service
Route::get('/verify_dataservice',[\App\Http\Controllers\User\UserController::class, 'verify_dataservice'])->name('user_verify_dataservice');

//Profile edit or control check
Route::any('/{usr}/{status}',[\App\Http\Controllers\User\UserController::class,'userProfile']);

//User Verify Control
Route::any('/verify',[\App\Http\Controllers\User\UserController::class,'verify'])->name('user_verify');
Route::any('/{usr}',[\App\Http\Controllers\User\UserController::class,'verifyControl']);





