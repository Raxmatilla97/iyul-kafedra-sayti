<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FooterSlider;
use Faker\Generator as Faker;

$factory->define(FooterSlider::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
