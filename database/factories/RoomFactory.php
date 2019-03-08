<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
  $title = ucfirst($faker->words(rand(1,5), true));
  
    return [

      'user_id' => random_int(1,2),
      'type_id' => random_int(1,2),
      'title' => $title,
      'slug' => str_slug($title, '-'),
      'description' => $faker->text(500),
      'prize' => random_int(20,60),
      'address' => $faker->address(),
      

    ];
});
