<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'gestion.clients';
    protected $fillable = [
        'id_user', 'id_rol', 'razon_social', 'cif', 'email', 'telephone', 'address', 'active'
    ];
}
