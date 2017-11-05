<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNeckColumnToShirts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shirts', function (Blueprint $table) {
            $table->double('neck', 8, 2)->after('pocket_hankerchief')->nullable();
            $table->integer('user_id')->after('order_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shirts', function (Blueprint $table) {
            $table->dropColumn('neck');
            $table->dropColumn('user_id');
        });
    }
}
