<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GridCard;
use Faker\Generator as Faker;

$factory->define(GridCard::class, function (Faker $faker) {
    $title =  $faker->sentence($nbWords = 4, $variableNbWords = true);  // Random task title
    $slug = Str::slug($title);
    

    return [
        'title' => $title,
        'slug' => $slug,
        'small_desc' => $faker->word,
        'image' => $faker->randomElement([
            '/storage/photos/1/png1.png',
            '/storage/photos/1/png2.png',
            '/storage/photos/1/png3.png',
            '/storage/photos/1/png4.png',
            '/storage/photos/1/png6.png',
            '/storage/photos/1/jpg7.jpeg',            
            '/storage/photos/1/png10.png'
            
            
            ]),
        
        'deleted_at' => null,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
