<?php
use Illuminate\Support\Facades\Route;


Route::any('/eventCategories',[\App\Http\Controllers\Events\EventsController::class,'events'])->name('event');
Route::any('/addEventCategory',[\App\Http\Controllers\Events\EventsController::class,'addEventCategory'])->name('addCategory');

Route::get('/Eventsdataservice',[\App\Http\Controllers\Events\EventsController::class, 'dataservice'])->name('event_dataservice');



