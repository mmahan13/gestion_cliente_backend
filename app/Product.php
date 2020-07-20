<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'gestion.products';
    protected $fillable = [
        'id_user', 'ref', 'name', 'descriptions', 'price','active'
    ];
}
