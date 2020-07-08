<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function get($id){
        $product = Product::find($id);
        return $product;
    }

    public function getAll(){
        $products = Product::all();
        return $products;
    }

    public function add(Request $request){
        $product = Product::create($request->all());
        return $product;
    }

    public function edit($id, Request $request){
        $product = $this->get($id);
        $product->fill($request->all())->save();
        return $product;
    }

    public function delete($id){
        $product = $this->get($id);
        $product->delete();
        return $product;  
    }
}
