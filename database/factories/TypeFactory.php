<?php

use Faker\Generator as Faker;
use App\Publisher;

$factory->define(Model::class, function (Faker $faker) {

  $name = $faker->name();

    return [
      'name' => $name,
      'slug' => str_slug($name),
      'url' => $faker->domainName(),
      'description' => $faker->lorem()
    ];
});
