<?php
use Illuminate\Support\Facades\Route;


Route::any('feed',[\App\Http\Controllers\Share\ShareController::class,'feed']);
Route::any('photos',[\App\Http\Controllers\Share\ShareController::class,'photos']);
Route::any('videos',[\App\Http\Controllers\Share\ShareController::class,'videos']);
Route::any('posts',[\App\Http\Controllers\Share\ShareController::class,'posts']);

//User Share DataService

Route::get('/photos_dataservice',[\App\Http\Controllers\Share\ShareController::class, 'photos_dataservice'])->name('photos_dataservice');
Route::get('/videos_dataservice',[\App\Http\Controllers\Share\ShareController::class, 'videos_dataservice'])->name('videos_dataservice');
Route::get('/posts_dataservice',[\App\Http\Controllers\Share\ShareController::class, 'posts_dataservice'])->name('posts_dataservice');