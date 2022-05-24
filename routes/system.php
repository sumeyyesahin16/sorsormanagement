<?php
use Illuminate\Support\Facades\Route;


Route::any('main_showcase',[\App\Http\Controllers\System\SystemControllers::class,'main']);
Route::any('discover_showcase',[\App\Http\Controllers\System\SystemControllers::class,'discover']);





