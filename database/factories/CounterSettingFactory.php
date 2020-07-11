<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CounterSetting;
use Faker\Generator as Faker;

$factory->define(CounterSetting::class, function (Faker $faker) {

    return [
        'number' => $faker->word,
        'small_desc' => $faker->word,
        'icon' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
