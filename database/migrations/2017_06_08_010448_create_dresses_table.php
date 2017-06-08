<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dresses', function (Blueprint $table) {
            $table->increments('id');
             $table->float('neck');
            $table->float('arm_length');
            $table->float('arm_round');
            $table->float('bust');
            $table->float('front_length');
            $table->float('back_length');
             $table->float('hip');
              $table->float('waist');
               $table->float('high_hip');
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
        Schema::dropIfExists('dresses');
    }
}
