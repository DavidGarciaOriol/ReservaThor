<?php

use Faker\Generator as Faker;
use App\Type;

$factory->define(Model::class, function (Faker $faker) {

  $name = $faker->name();

    return [
      'name' => $name,
      'description' => $faker->lorem()
    ];
});
