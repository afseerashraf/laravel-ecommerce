<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\productSaveRequest;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class productController 
{
    public function list(){
        $products = product::all();
        return view('admin.products.list',compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function save(productSaveRequest $request){
        $input = $request->validated();
        product::create($input);
        return redirect()->route('admin.product.list')->with('message','Product saved successfully');
    }
}
