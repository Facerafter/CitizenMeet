<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\MyEvent::class, function (Faker\Generator $faker)
{
  return [
    'organisername' => $faker->name,
    'organiseremail' => $faker->safeEmail,
    'url' => $faker->url,
    'city' => $faker->city,
    'country' => $faker->country,
    'state' => $faker->state,
    'address' => $faker->streetAddress,
    'date' => $faker->date,
    'starttime' => $faker->time,
  ];
});
