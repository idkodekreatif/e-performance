<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFileToPointETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('point_e', function (Blueprint $table) {
            $table->string('fileE1_1')->after('scorSubItemE1_1')->nullable();
            $table->string('fileE1_2')->after('scorSubItemE1_2')->nullable();
            $table->string('fileE1_3')->after('scorSubItemE1_3')->nullable();
            $table->string('fileE1_4')->after('scorSubItemE1_4')->nullable();
            $table->string('fileE1_5')->after('scorSubItemE1_5')->nullable();
            $table->string('fileE1_6')->after('scorSubItemE1_6')->nullable();
            $table->string('fileE2_1')->after('scorSubItemE2_1')->nullable();
            $table->string('fileE2_2')->after('scorSubItemE2_2')->nullable();
            $table->string('fileE2_3')->after('scorSubItemE2_3')->nullable();
            $table->string('fileE2_4')->after('scorSubItemE2_4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('point_e', function (Blueprint $table) {
            $table->dropColumn('fileE1_1');
            $table->dropColumn('fileE1_2');
            $table->dropColumn('fileE1_3');
            $table->dropColumn('fileE1_4');
            $table->dropColumn('fileE1_5');
            $table->dropColumn('fileE1_6');
            $table->dropColumn('fileE2_1');
            $table->dropColumn('fileE2_2');
            $table->dropColumn('fileE2_3');
            $table->dropColumn('fileE2_4');
        });
    }
}
