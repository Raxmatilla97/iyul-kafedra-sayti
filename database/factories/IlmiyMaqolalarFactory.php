<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\IlmiyMaqolalar;
use Faker\Generator as Faker;

$factory->define(IlmiyMaqolalar::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'slug' => $faker->word,
        'image' => $faker->word,
        'content' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'user_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
