<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Order;
use App\OrderProduct;
use App\Product;
use Faker\Generator as Faker;

$factory->define(OrderProduct::class, function (Faker $faker) {
    return [
        'order_id' => Order::first()->id,
        'product_id' => Product::first()->id,
        'qty' => $faker->randomNumber(5),
        'price_each' => $faker->randomNumber(5),
    ];
});
