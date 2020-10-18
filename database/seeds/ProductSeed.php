<?php

use App\Product;
use App\ProductLine;
use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_line_id' => ProductLine::first()->id,
            'name' => 'Falsh Light',
            'scale' => '5',
            'vendor' => 'Ayman Abed',
            'pdt_description' => 'Falsh Light desc',
            'qty_in_stock' => '300',
            'buy_price' => '550',
            'msrp' => 'msrp',
        ]);
    }
}
