<?php

use Faker\Generator as Faker;

$factory->define(\App\Artwork::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase(),
        'description' => $faker->realText($maxNbChars = 150, $indexSize = 2),
        'upvotes' => $faker->numberBetween(1, 5),
        'url' => $faker->image(storage_path('app/public/artwork'), 500,500, null, false),
        'user_id' => $faker->numberBetween(1, 5),
    ];
});
