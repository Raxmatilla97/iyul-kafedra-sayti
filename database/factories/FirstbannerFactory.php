<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Firstbanner;
use Faker\Generator as Faker;

$factory->define(Firstbanner::class, function (Faker $faker) {

    return [
        'title' => "Birinchi banner uchun qism, yoki reklama nomi",
        'small_desc' => "Masalan qandaydur, brend nomi yoki mavzu.",
        'desc' => "Bannerning 3-4 gapdan iborat bo'ladigan bo'lagi, lekin ko'p gap yozib bo'lmaydi, lekin aniq o'lcham yo'q.",
        'slug' => $faker->word,
        'image' => '/storage/photos/1/testlashtirish/portfolio-list-7.jpg',  
        'buttonname' => "Ko'rish",
        'deleted_at' => null,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
