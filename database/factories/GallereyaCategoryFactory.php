<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GallereyaCategory;
use Faker\Generator as Faker;

$factory->define(GallereyaCategory::class, function (Faker $faker) {
    $title =  $faker->sentence($nbWords = 4, $variableNbWords = true);  // Random task title
    $slug = Str::slug($title);
    
    return [
        'title' => $title,
        'slug' => $slug,
        'deleted_at' => null,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
