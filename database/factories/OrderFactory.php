<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Model;
use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'customer_id' => Customer::first()->id,
        'order_date' => now(),
        'required_date' => now(),
        'shipped_date' => now(),
        'status' => $faker->randomNumber(1),
        'comments' => $faker->word,
    ];
});
