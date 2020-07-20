<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\HeaderOrder;
use App\LineOrder;

class OrderController extends Controller
{
    public function get($id){
        $order = HeaderOrder::find($id);
        return $order;
    }

    public function getAllHeaderOrder(){
        $orders =  HeaderOrder::all();
        return $orders;
    }

    public function create(Request $request){
        $order = HeaderOrder::create($request->all());
        return $order;
    }

    public function update($id, Request $request){
        $order = $this->get($id);
        $order->fill($request->all())->save();
        return $order;
    }

    public function delete($id){
        $order = $this->get($id);
        $order->delete();
        return $order;  
    }

    //Lines
    public function getLines($id){
        $lines = LineOrder::where('id_header_orders', $id)->get();
        return $lines;
    }
}
