<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\VideoBanner;
use Faker\Generator as Faker;

$factory->define(VideoBanner::class, function (Faker $faker) {

    return [
        'title' => "Biron video Bannerni nomlanishi uchun.",
        'small_desc' => "Video bannerning qisqa mazmuni uchun ajratilgan joy.",
        'image' => '/front/assets/img/misc/Art-Paints.jpg',
        'video' => 'https://vimeo.com/9176726',
        'deleted_at' => null,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
