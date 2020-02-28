<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
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

$factory->define(App\vacancies::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'postName' => $faker->sentence,
        'aboutPost' => $faker->sentence,
        'applicable' => $faker->text,
        'formStart' => now(),
        'formEnd' => now(),
        'lastDate' => now(),
        'admitCard' => now(),
        'examdate' => now(),
        'feesCategoryUp' => rand(10, 100),
        'feesCategoryDown' => rand(10, 100),
        'female' => rand(10, 100),
        'paymentMethod' => 'online',
        'totalPost' => rand(1000, 10000),
        'postForMale' => rand(100, 1000),
        'postForFemale' => rand(100, 1000),
        'educationEligibility' => $faker->text,
        'ageLimit' => rand(10, 30),
        'reserveForMaleGeneral' => rand(100, 1000),
        'reserveForMaleObc' => rand(100, 1000),
        'reserveForMaleEws' => rand(100, 1000),
        'reserveForMaleSc' =>rand(100, 1000),
        'reserveForMaleSt' => rand(100, 1000),
        'reserveForFemaleGeneral' => rand(100, 1000),
        'reserveForFemaleObc' => rand(100, 1000),
        'reserveForFemaleEws' => rand(100, 1000),
        'reserveForFemaleSc' => rand(100, 1000),
        'reserveForFemaleSt' => rand(100, 1000),
        'maleHeight' => rand(100, 1000).'CM',
        'maleChest' => rand(100, 1000).'CM',
        'maleRunning' => rand(100, 1000).'M',
        'maleLongJump' => rand(100, 1000).'M',
        'maleHighJump' => rand(100, 1000).'M',
        'femaleHeight' => rand(100, 1000).'CM',
        'femaleChest' => rand(100, 1000).'CM',
        'femaleRunning' => rand(100, 1000).'M',
        'femaleLongJump' => rand(100, 1000).'M',
        'femaleHighJump' => rand(100, 1000).'M',
        'linkofRegistration' => 'HTTPS://google.com/',
        'lonkoflogin' => 'HTTPS://google.com/',
        'linkOfofficialNotification' => 'HTTPS://google.com/',
        'linkOfofficialWebsite' => 'HTTPS://google.com/',
        'informationRequire' => '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23'
    ];
});
