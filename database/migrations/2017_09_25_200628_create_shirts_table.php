<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShirtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shirts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('gender');
            $table->string('fabric');
            

            $table->string('collar')->nullable();
            $table->string('sleeve_and_cuffs')->nullable();
            $table->string('buttons')->nullable();
            $table->string('pockets')->nullable();
            $table->string('placket')->nullable();
            $table->string('fit')->nullable();
            $table->string('back')->nullable();
            $table->string('bottom')->nullable();
            $table->string('zip')->nullable();
            $table->string('thread_colour')->nullable();
            $table->string('pocket_hankerchief')->nullable();


            $table->float('neck')->nullable();
            $table->float('arm_length')->nullable();
            $table->float('arm_round')->nullable();
            $table->float('chest_bust')->nullable();
            $table->float('front_length')->nullable();
            $table->float('back_length')->nullable();

            $table->string('refImage1')->nullable();;
            $table->string('refImage2')->nullable();;
            $table->longText('description')->nullable();;

            $table->string('fabric_status')->nullable();;
            $table->string('design_status')->nullable();;
            $table->string('measurement_status')->nullable();;
            $table->string('misc_status')->nullable();;

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
        Schema::dropIfExists('shirts');
    }
}
