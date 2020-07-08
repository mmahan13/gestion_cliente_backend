<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'id_user' => 2,
        'ref' => Str::random(10),
        'name' => 'Miel 2 Kilos',
        'descriptions' => $faker->sentence(4, false),
        'price' => '12,00',
       
    ];
});
