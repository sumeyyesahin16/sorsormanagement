<?php
use Illuminate\Support\Facades\Route;


Route::any('commission',[\App\Http\Controllers\User\UserController::class,'commission']);
Route::any('verify_requests',[\App\Http\Controllers\User\UserController::class,'verifyRequests']);
Route::any('/',[\App\Http\Controllers\User\UserController::class,'index'])->name('user');

//User Verify Control
Route::any('/verify',[\App\Http\Controllers\User\UserController::class,'verify'])->name('user_verify');

//Verified Users List
Route::any('/verified_users',[\App\Http\Controllers\User\UserController::class,'usersVerified'])->name('verified_user_list');

//Profile edit or control check

Route::group(['prefix' => 'profile'],function(){
    Route::any('ApplyChanges',[\App\Http\Controllers\User\UserController::class,'editProfile'])->name('ApplyChanges');
    Route::any('/{usr}/verify_control',[\App\Http\Controllers\User\UserController::class,'verifyControl']);
    Route::any('/{usr}/post_detail',[\App\Http\Controllers\User\UserController::class,'user_post_detail']);
    Route::any('/{usr}/{status}',[\App\Http\Controllers\User\UserController::class,'userProfile']);
});

//User Data Service
Route::get('/dataservice',[\App\Http\Controllers\User\UserController::class, 'dataservice'])->name('user_dataservice');
Route::get('/verified_dataservice',[\App\Http\Controllers\User\UserController::class, 'verifiedDataservice'])->name('user_verified_dataservice');
Route::get('/verify_dataservice',[\App\Http\Controllers\User\UserController::class, 'verify_dataservice'])->name('user_verify_dataservice');
Route::get('/profile/user_dataservice',[\App\Http\Controllers\User\UserController::class, 'shareDataservice'])->name('user_share_dataservice');









