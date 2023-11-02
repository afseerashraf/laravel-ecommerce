<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\productSaveRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class productController 
{
    public function list(){
        return view('admin.products.list');
    }

    public function create(){
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function save(productSaveRequest $request){
        $data = $request->validated();
        return $data;
    }
}
