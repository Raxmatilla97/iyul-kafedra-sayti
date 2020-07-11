<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Talabalar;
use Faker\Generator as Faker;

$factory->define(Talabalar::class, function (Faker $faker) {

    return [
        'ism' => $faker->word,
        'familya' => $faker->word,
        'ota_ism' => $faker->word,
        'tugulgan_yil' => $faker->word,
        'tugulgan_joy' => $faker->word,
        'yashash_manzil' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'pass_ser' => $faker->word,
        'pass_nom' => $faker->word,
        'jinsi' => $faker->word,
        'tell' => $faker->word,
        'uy_teli' => $faker->word,
        'oquv_turi_id' => $faker->word,
        'user_id' => $faker->word,
        'qabul_yili_id' => $faker->word,
        'guruh_id' => $faker->word,
        'yon_kod_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
