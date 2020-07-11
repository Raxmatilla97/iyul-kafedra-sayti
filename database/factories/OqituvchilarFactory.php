<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Oqituvchilar;
use Faker\Generator as Faker;

$factory->define(Oqituvchilar::class, function (Faker $faker) {

    return [
        'ism' => $faker->word,
        'familya' => $faker->word,
        'sharif' => $faker->word,
        'tugulgan_yil' => $faker->word,
        'tugulgan_joy' => $faker->word,
        'yashash_manzil' => $faker->word,
        'ishlamoqda' => $faker->word,
        'fanlar_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'pass_ser' => $faker->word,
        'pass_nom' => $faker->word,
        'jinsi' => $faker->word,
        'tell' => $faker->word,
        'uy_teli' => $faker->word,
        'user_id' => $faker->word,
        'mavqe_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
