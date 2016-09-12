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

$factory->define(SMSSim\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'dica_senha' => $faker->word,
        'remember_token' => str_random(10),
    ];
});

$factory->define(\SMSSim\Models\Service::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'price' => random_int(100, 200),
    ];
});

$factory->define(\SMSSim\Models\Contract::class, function(Faker\Generator $faker){
    $date = new \DateTime('now');

    return [
        'data_contrato' => $date->format('Y-m-d')
    ];
});