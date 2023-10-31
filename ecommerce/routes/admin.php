<?php

use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomepageController;


Route::name('admin')->group(function(){
    Route::get('admin/login',[LoginController::class,'login'])->name('loginpage');
    Route::post('admin/do-login',[LoginController::class,'dologin'])->name('do.login');
    Route::get('/admin',[dashboardController::class,'dashboard'])->name('dashboard');
});