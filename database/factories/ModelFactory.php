<?php

use  Faker\Generator as Faker;

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

$factory->define(App\Model\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Model\Introduction::class, function (Faker $faker) {

    return [
        'title' => $faker->text,
        'content' => $faker->text,
    ];
});

$factory->define(App\Model\Category::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Model\News::class, function (Faker $faker) {

    return [
        'title' => $faker->sentence,
        'description' => $faker->text,
        'content' => $faker->text,
    ];
});

$factory->define(App\Model\Project::class, function (Faker $faker) {

    return [
        'title' => $faker->sentence,
        'description' => $faker->text,
        'content' => $faker->text,
    ];
});

$factory->define(App\Model\Contact::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'subject' => $faker->sentence,
        'content' => $faker->text,
    ];
});

$factory->define(App\Model\Product::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->text,
    ];
});
