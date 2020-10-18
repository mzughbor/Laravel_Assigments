<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'sales_rep_empoyee_num' => $faker->randomNumber(4),
        'name' => $faker->word,
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'phone' => $faker->word,
        'address1' => $faker->word,
        'address2' => $faker->word,
        'city' => $faker->word,
        'state' => $faker->word,
        'postal_code' => $faker->randomNumber(4),
        'country' => $faker->word,
        'credit_limit' => $faker->randomNumber(4),
    ];
});
