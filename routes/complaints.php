<?php
use Illuminate\Support\Facades\Route;


Route::any('reported_users',[\App\Http\Controllers\Compaints\CompaintsController::class,'reportedUsers']);
Route::any('help',[\App\Http\Controllers\Compaints\CompaintsController::class,'help']);

