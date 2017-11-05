<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToSleeveandcuffs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sleeveandcuffs', function (Blueprint $table) {
            $table->string('img_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sleeveandcuffs', function (Blueprint $table) {
            $table->dropColumn('img_link');
        });
    }
}
