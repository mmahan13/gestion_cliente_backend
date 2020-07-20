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
        $products = Product::where('active', '1')->orderby('id', 'desc')->get();
        return $products;
    }

    public function create(Request $request){
        $product = Product::create($request->all());
        return $product;
    }

    public function update($id, Request $request){
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
