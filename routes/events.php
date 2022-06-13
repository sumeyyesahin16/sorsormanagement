<?php
use Illuminate\Support\Facades\Route;

Route::any('/events',[\App\Http\Controllers\Events\EventsController::class,'index'])->name('event');
Route::get('/Eventsdataservice',[\App\Http\Controllers\Events\EventsController::class, 'eventDataService'])->name('events_dataservice');


Route::any('/eventCategories',[\App\Http\Controllers\Events\EventsController::class,'events'])->name('event');
Route::any('/addEventCategory',[\App\Http\Controllers\Events\EventsController::class,'addEventCategory'])->name('addCategory');
Route::get('/Events_category_dataservice',[\App\Http\Controllers\Events\EventsController::class, 'dataservice'])->name('event_category_dataservice');

