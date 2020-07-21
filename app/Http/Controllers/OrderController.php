<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\HeaderOrder;
use App\LineOrder;

class OrderController extends Controller
{
    public function getNumberOrder(){
        return $number_order = HeaderOrder::max('id') + 1;
    }

    public function get($id){
        $order = HeaderOrder::find($id);
        return $order;
    }

    public function getAllHeaderOrder(){
        $orders =  HeaderOrder::orderBy('id','DESC')->get();;
        return $orders;
    }

    public function createHeaderOrder($header){
        $header = HeaderOrder::create($header);
        return $header;
    }

    public function createLinesOrder($lines, $id_header_orders){
       
        foreach($lines as $line) {
            $lineOrder = new LineOrder;
            $lineOrder->id_clients = $line['id_user'];
            $lineOrder->id_header_orders = $id_header_orders;
            $lineOrder->id_products = $line['id'];
            $lineOrder->ref = $line['ref'];
            $lineOrder->name  = $line['name'];
            $lineOrder->quantity  = $line['quantity'];
            $lineOrder->price  = $line['price'];
            $lineOrder->total_lines = $line['total_lines'];
            $lineOrder->save();
        }
        return $lineOrder;
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

    public function createOrder(Request $request){
        $data = $request->all();
        $numberorder = $this->getNumberOrder();
        $data[0]['number_orders'] = isset($numberorder) ? $numberorder: 1;
        $o['header'] = $this->createHeaderOrder($data[0]);
        if(isset($o['header'])){
           $o['lines'] = $this->createLinesOrder($data[1], $o['header']['id']);
        }
        return $o;
    }
}