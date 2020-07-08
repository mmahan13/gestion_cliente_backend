<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'id_user' => factory(App\User::class),
        'id_rol' => factory(App\Role::class),
        'razon_social' => $faker->name,
        'cif' => 'A58745369',
        'email' => $faker->unique()->safeEmail,
        'telephone' => '687553641',
        'address' => $faker->address,
        'active' => '1',
        
         
    ];
});
