<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MeasurementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');
            $table->float('neck');
            $table->float('arm_length');
            $table->float('arm_round');
            $table->float('bust');
            $table->float('chest_bust');
            $table->float('front_length');
            $table->float('back_length');
            $table->float('hip');
            $table->float('waist');
            $table->float('high_hip');
            $table->float('leg_length');
            $table->float('leg_round');
            $table->integer('fabric_id');
            $table->integer('fitting_id');
            $table->integer('thread_id');
            $table->integer('collartype_id');
            $table->integer('pocket_id');
            $table->integer('button_id');
            $table->integer('zippertype_id');
            $table->integer('pockethankerchief_id');
            $table->integer('embroidery_id');
            $table->text('extras');
            $table->string('image_embroidery');
            $table->string('image_sample');
            $table->string('cloth_type');
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
        Schema::dropIfExists('measurements');
    }
}
