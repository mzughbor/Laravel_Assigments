<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Model;
use App\Paymment;
use Faker\Generator as Faker;

$factory->define(Paymment::class, function (Faker $faker) {
    return [
        'check_num' => $faker->randomNumber(5),
        'customer_id' => Customer::first()->id,
        'paymment_date' => now(),
        'amount' => $faker->randomNumber(5),
    ];
});
