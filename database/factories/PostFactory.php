<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id' => rand(1,30),
        'category_id' => rand(1,30),
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(580),
        'except' => $faker->text(280),
        'file' => $faker->imageUrl($width = 1200, $height = 400),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
