<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController 
{
    public function list(){
        return view('admin.products.list');
    }

    public function create(){
        return view('admin.products.create');
    }
}
