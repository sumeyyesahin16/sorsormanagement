<?php
use Illuminate\Support\Facades\Route;


Route::any('sorsorcash',[\App\Http\Controllers\Cash\CashController::class,'sorsorcash']);
Route::any('commissions',[\App\Http\Controllers\Cash\CashController::class,'commissions']);





