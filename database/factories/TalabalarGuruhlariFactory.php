<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TalabalarGuruhlari;
use Faker\Generator as Faker;

$factory->define(TalabalarGuruhlari::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'year' => $faker->word,
        'arxive' => $faker->word,
        'user_id' => $faker->word,
        'teacher_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
