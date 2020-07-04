<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Xamkorlar;
use Faker\Generator as Faker;

$factory->define(Xamkorlar::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'slug' => $faker->word,
        'image' => $faker->word,
        'active' => $faker->word,
        'text' => $faker->text,
        'user_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
