<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Yangiliklar;
use Faker\Generator as Faker;

use App\Models\YangiliklarBolimlari;
use App\User;

$factory->define(Yangiliklar::class, function (Faker $faker) {

    $title =  $faker->sentence($nbWords = 4, $variableNbWords = true);  // Random task title
    $slug = Str::slug($title);
    

    return [
        'title' => $title,
        'slug' => $slug,
        'active' => $faker->randomElement(['0','1']),
        'desc' => $faker->text,
        'smal_desc' => $faker->text,
        'image' => $faker->randomElement([
            '/storage/photos/1/testlashtirish/portfolio-list-1.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-15.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-3.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-4.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-5.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-6.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-7.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-8.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-9.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-10.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-11.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-12.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-13.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-14.jpg',
          
            
            ]),
        'user_id' => User::all()->random()->id,

        'cate_id' => YangiliklarBolimlari::all()->random()->id,
      
        'deleted_at' => null,
        'created_at' => $faker->date('Y-m-d'),
        'updated_at' => $faker->date('Y-m-d ')
    ];
});
