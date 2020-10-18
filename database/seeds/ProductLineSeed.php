<?php

use App\ProductLine;
use Illuminate\Database\Seeder;

class ProductLineSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductLine::create([
            'desc_in_text' => 'Product desc',
            'desc_in_html' => 'Product html',
            'image' => 'Image',
        ]);
    }
}
