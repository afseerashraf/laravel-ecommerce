<?php

use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\admin\productController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomepageController;


Route::name('admin')->group(function(){
    Route::get('admin/login',[LoginController::class,'login'])->name('loginpage'); //have Route [admin.do.login] not defined.
    Route::post('admin/do-login',[LoginController::class,'dologin'])->name('do.login'); //have The GET method is not supported for route admin/do-login. Supported methods: POST.
    Route::get('/admin',[dashboardController::class,'dashboard'])->name('dashboard');
    
    Route::name('product.')->prefix('admin/products')->group(function(){
    Route::get('/',[productController::class,'list'])->name('product.list');
    Route::get('create',[productController::class,'create'])->name('create');
    });
});