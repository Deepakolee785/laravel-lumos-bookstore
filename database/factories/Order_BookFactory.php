<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order_Book;
use Faker\Generator as Faker;

$factory->define(Order_Book::class, function (Faker $faker) {

    return [
        'order_id' => $faker->randomDigitNotNull,
        'book_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
