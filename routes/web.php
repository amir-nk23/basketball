<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.user.login');
});


Route::prefix('auth/')->group(function (){

    Route::prefix('user/')->name('user.')->group(function (){

        Route::get('login',[\App\Http\Controllers\User\AuthController::class,'showLogin'])->middleware('guest')->name('showLogin');
        Route::get('register',[\App\Http\Controllers\User\AuthController::class,'showRegister'])->middleware('guest')->name('showRegister');
        Route::post('login',[\App\Http\Controllers\User\AuthController::class,'login'])->name('login');
        Route::post('register',[\App\Http\Controllers\User\AuthController::class,'register'])->name('register');
        Route::get('logout',[\App\Http\Controllers\User\AuthController::class,'logout'])->name('logout');

    });


    Route::prefix('admin/')->name('admin.')->group(function (){

        Route::get('login',[\App\Http\Controllers\Admin\AuthController::class,'showLogin'])->middleware('guest')->name('showLogin');
        Route::post('login',[\App\Http\Controllers\Admin\AuthController::class,'login'])->name('login');
        Route::get('logout',[\App\Http\Controllers\Admin\AuthController::class,'logout'])->name('logout');

    });


});


Route::prefix('user/')->middleware('auth:web')->name('user.')->group(function (){

    Route::resource('player',\App\Http\Controllers\User\PlayerController::class);

});

Route::prefix('admin/')->middleware('auth:admin')->name('admin.')->group(function (){

    Route::resource('manager',\App\Http\Controllers\Admin\ManagerConroller::class);


});


