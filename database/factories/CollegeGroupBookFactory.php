<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CollegeGroupBook;
use Faker\Generator as Faker;

$factory->define(CollegeGroupBook::class, function (Faker $faker) {

    return [
        'college_id' => $faker->randomDigitNotNull,
        'group_id' => $faker->randomDigitNotNull,
        'book_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
