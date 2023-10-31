<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class LoginController extends Authenticatable
{
    public function login(){
        return view('admin.login');
    }
    public function dologin(){
        $input = ['username' => request('username'), 'password' => request('password')];
        if(auth()->guard('admin')->attempt($input)){
            return redirect()->route('admin.dashboard');
        }else{
            return "Login Error";
        }

    }
}
