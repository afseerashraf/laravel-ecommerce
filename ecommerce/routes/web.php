<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomepageController;


Route::name('user')->group(function(){
    Route::get('/home',[HomepageController::class,'home'])->name('home');
});