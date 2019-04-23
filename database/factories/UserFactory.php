<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'alias' => $faker->word,
        'status' => 'Filler',
        'image_url' => $faker->image(storage_path('app/public/users'), 150,150, null, false),
        'supporters' => random_int(1, 5),
        'phone' => $faker->numberBetween(100000, 999999),
        'about' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'password' => bcrypt('testbot'),
        'remember_token' => Str::random(10),
    ];
});
