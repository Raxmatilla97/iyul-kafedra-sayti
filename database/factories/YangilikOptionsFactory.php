<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\YangilikOptions;
use Faker\Generator as Faker;

$factory->define(YangilikOptions::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'small_title' => $faker->word,
        'small_desc' => $faker->word,
        'deleted_at' => null,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
