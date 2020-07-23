<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineOrder extends Model
{
    protected $table = 'gestion.lines_orders';
    protected $fillable = [
        'id_clients', 'id_header_orders', 'id_products', 'name', 'quantity', 'price','total'
    ];
}
