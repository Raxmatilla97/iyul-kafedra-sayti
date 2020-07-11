<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\YangilikOptions;
use Faker\Generator as Faker;

$factory->define(YangilikOptions::class, function (Faker $faker) {

    return [
        'title' => "Kafedra yangilik va e'lonlari",
        'small_title' => "Bu yerda siz kafedrada yuz berayotgan yangilik va e'lonlarni ko'rishingiz mumkin.",
        'elon_desc' => "E'lonlar",
        'deleted_at' => null,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
