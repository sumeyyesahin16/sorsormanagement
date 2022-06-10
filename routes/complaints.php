<?php
use Illuminate\Support\Facades\Route;


Route::any('reported_users',[\App\Http\Controllers\Compaints\ComplaintsController::class,'reportedUsers']);
Route::any('help',[\App\Http\Controllers\Compaints\ComplaintsController::class,'help']);

Route::any('/compDataService',[\App\Http\Controllers\Compaints\ComplaintsController::class,'dataservice'])->name('compDataService');

Route::any('/{usr}/detail',[\App\Http\Controllers\Compaints\ComplaintsController::class,'user']);
