<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Plant;
use Faker\Generator as Faker;

$factory->define(Plant::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameFemale
    ];
});
