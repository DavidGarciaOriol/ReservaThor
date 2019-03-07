<?php

use Faker\Generator as Faker;
use App\Type;

$factory->define(App\Type::class, function (Faker $faker) {

  $name = $faker->name();

    return [
      'name' => $name,
      'description' => $faker->text(200)
    ];
});
