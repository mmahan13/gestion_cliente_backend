<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function get($id){
        $client = Client::find($id);
        return $client;
    }

    public function getAll(){
        $clients = Client::orderBy('id','DESC')->get();
        return $clients;
    }

    public function create(Request $request){
        $client = Client::create($request->all());
        return $client;
    }

    public function update($id, Request $request){
        $client = $this->get($id);
        $client->fill($request->all())->save();
        return $client;    
    }

    public function delete($id){
        $client = $this->get($id);
        $client->delete();
        return $client;  
    
    }
}
