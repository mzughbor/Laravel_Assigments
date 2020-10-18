<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_line_id')->unsigned();
            $table->string('name');
            $table->integer('scale');
            $table->string('vendor');
            $table->string('pdt_description');
            $table->integer('qty_in_stock');
            $table->float('buy_price', 19, 0);
            $table->string('msrp');
            $table->foreign('product_line_id')->references('id')->on('product_lines')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
