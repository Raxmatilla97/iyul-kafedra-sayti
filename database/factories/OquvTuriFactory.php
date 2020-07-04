<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OquvTuri;
use Faker\Generator as Faker;

$factory->define(OquvTuri::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'slug' => $faker->word,
        'desc' => $faker->text,
        'img' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
