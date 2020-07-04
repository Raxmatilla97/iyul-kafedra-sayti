<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Elonlar;
use Faker\Generator as Faker;

$factory->define(Elonlar::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'slug' => $faker->word,
        'image' => $faker->word,
        'content' => $faker->text,
        'smal-content' => $faker->text,
        'user_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
