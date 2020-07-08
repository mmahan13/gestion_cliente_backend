<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'gestion.roles';
    protected $fillable = [
        'tipo', 'name','updated_at', 'created_at'
    ];
}
