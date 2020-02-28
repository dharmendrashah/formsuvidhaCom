<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\formControll;
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

$factory->define(formControll::class, function (Faker $faker) {
    return [
        'formID' => $faker->numberBetween($min = 0, $max = 40),
        'filledBy' => $faker->numberBetween($min = 0, $max = 40),
    ];
});
