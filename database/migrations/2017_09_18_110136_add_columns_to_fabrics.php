<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToFabrics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fabrics', function (Blueprint $table) {
            $table->string('fabric_id');
            $table->string('material');
            $table->string('season');
            $table->string('ply');
            $table->string('thread_count');
            $table->string('weight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fabrics', function (Blueprint $table) {
           $table->dropColumn('fabric_id');
           $table->dropColumn('material');
           $table->dropColumn('season');
           $table->dropColumn('ply');
           $table->dropColumn('thread_count');
           $table->dropColumn('weight');
        });
    }
}
