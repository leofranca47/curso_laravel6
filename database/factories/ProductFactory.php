<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "price" => 12.2,
        "description" => "jojsdaklçfjdpajfdçsalça",
    ];
});