<?php
use Illuminate\Support\Facades\Route;


Route::any('feed',[\App\Http\Controllers\Share\ShareController::class,'feed']);
Route::any('photos',[\App\Http\Controllers\Share\ShareController::class,'photos']);
Route::any('photos',[\App\Http\Controllers\Share\ShareController::class,'photos_count']);
Route::any('videos',[\App\Http\Controllers\Share\ShareController::class,'videos']);
Route::any('videos',[\App\Http\Controllers\Share\ShareController::class,'videos_count']);
Route::any('posts',[\App\Http\Controllers\Share\ShareController::class,'posts']);
Route::any('posts',[\App\Http\Controllers\Share\ShareController::class,'posts_count']);


//User Share DataService
Route::get('/dataservice',[\App\Http\Controllers\Share\ShareController::class, 'dataservice'])->name('photos_dataservice');


