<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product.index');
    }
    public function store(ProductRequest $request){
        Product::create($request->validated());
        return redirect()->route('product.index')->with('add','succefully');
    }
}
