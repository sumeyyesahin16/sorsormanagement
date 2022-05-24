<?php
use Illuminate\Support\Facades\Route;


Route::any('feed',[\App\Http\Controllers\Share\ShareController::class,'feed']);
Route::any('photos',[\App\Http\Controllers\Share\ShareController::class,'photos']);
Route::any('videos',[\App\Http\Controllers\Share\ShareController::class,'videos']);
Route::any('posts',[\App\Http\Controllers\Share\ShareController::class,'posts']);




