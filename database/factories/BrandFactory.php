<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
      'name'        => $faker -> company,
      'logo'        => $faker -> imageUrl,
      'n_locations' => rand(2, 100),
    ];
});


//imageUrl($width = 640, $height = 480)
