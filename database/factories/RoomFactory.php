<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
  $title = ucfirst($faker->words(rand(1,10), true));
  
    return [

      'user_id' => random_int(1,2),
      'type_id' => random_int(1,5),
      'title' => $title,
      'slug' => str_slug($title, '-'),
      'description' => $faker->text(500),
      'address' => $faker->address(),
      

    ];
});
