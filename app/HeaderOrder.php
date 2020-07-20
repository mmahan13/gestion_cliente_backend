<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderOrder extends Model
{
    protected $table = 'gestion.header_orders';
    protected $fillable = [
        'id_user', 'id_clients', 'number_orders', 'date', 'status', 'total'
    ];

    public function lines()
    {
        return $this->belongsToMany('App\LineOrder');
    }
}
