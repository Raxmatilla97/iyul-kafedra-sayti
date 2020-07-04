<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Firstbanner;
use Faker\Generator as Faker;

$factory->define(Firstbanner::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'small_desc' => $faker->word,
        'desc' => $faker->word,
        'slug' => $faker->word,
        'image' => $faker->randomElement([
            'storage/photos/1/testlashtirish/portfolio-list-1.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-2.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-3.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-4.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-5.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-6.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-7.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-8.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-9.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-10.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-11.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-12.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-13.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-14.jpg',
            'storage/photos/1/testlashtirish/portfolio-list-15.jpg',
            
            ]),
        'buttonname' => $faker->word,
        'deleted_at' => null,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
