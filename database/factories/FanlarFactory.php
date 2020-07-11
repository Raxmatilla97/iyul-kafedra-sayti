<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Fanlar;
use Faker\Generator as Faker;

$factory->define(Fanlar::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'slug' => $faker->word,
        'image' => $faker->word,
        'user_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
