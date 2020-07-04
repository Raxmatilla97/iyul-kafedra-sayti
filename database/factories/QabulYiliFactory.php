<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\QabulYili;
use Faker\Generator as Faker;

$factory->define(QabulYili::class, function (Faker $faker) {

    return [
        'year' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
