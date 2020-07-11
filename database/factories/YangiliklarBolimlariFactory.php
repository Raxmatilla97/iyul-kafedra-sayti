<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\YangiliklarBolimlari;
use Faker\Generator as Faker;

$factory->define(YangiliklarBolimlari::class, function (Faker $faker) {

    $title =  $faker->sentence($nbWords = 4, $variableNbWords = true);  // Random task title
    $slug = Str::slug($title);
    return [


        'title' => $title,
        'slug' => $slug,
        'img' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => null,
    ];
});
