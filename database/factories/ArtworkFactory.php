<?php

use Faker\Generator as Faker;

$factory->define(\App\Artwork::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase(),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
        'upvotes' => $faker->randomDigit(),
        'url' => $faker->image(storage_path('app/public/artworks'), 500,500, null, false),
        'user_id' => 1,
    ];
});
