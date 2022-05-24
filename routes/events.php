<?php
use Illuminate\Support\Facades\Route;


Route::any('events',[\App\Http\Controllers\Events\EventsController::class,'events']);


