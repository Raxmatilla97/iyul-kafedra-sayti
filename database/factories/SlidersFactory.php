<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sliders;
use Faker\Generator as Faker;

$factory->define(Sliders::class, function (Faker $faker) {

    return [
        'sarlavha' => $faker->randomElement([
       
            "Slayder sarlavhasi uchun 1#",
            "Slayder sarlavhasi uchun 2#",
            "Slayder sarlavhasi uchun 3#"
            
            
            ]),
        'kichik_sarlavha' => $faker->randomElement([
       
            "Slayder kichik sarlavhasi uchun 1#",
            "Slayder kichik sarlavhasi uchun 2#",
            "Slayder kichik sarlavhasi uchun 3#"
            
            
            ]),
        'gap' => $faker->randomElement([
       
            "Slayder kichik gap bo'lagi uchun  1#",
            "Slayder kichik gap bo'lagi uchun  3#",
            "Slayder kichik gap bo'lagi uchun  2#"

            
            
            
            ]),
        'button_1' => 'Kirish',
        'button_2' => "Ko'rish",
        'image' => $faker->randomElement([
       
            '/storage/photos/1/IMG_3448-min-min.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-6.jpg',
            '/storage/photos/1/testlashtirish/portfolio-list-11.jpg',
            
            ]),
        'deleted_at' => null,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
