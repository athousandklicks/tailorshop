<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('description');
            $table->float('price');
            $table->integer('category_id');
            $table->integer('stock_status');
            $table->string('small');
            $table->string('medium');
            $table->string('large');
            $table->string('xlarge');
            $table->string('xxlarge');
            $table->string('front_image');
            $table->string('back_image');
            $table->string('left_image');
            $table->string('right_image');
            $table->string('detailed_image');
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
