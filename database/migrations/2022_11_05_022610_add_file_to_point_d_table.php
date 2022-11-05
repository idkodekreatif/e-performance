<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFileToPointDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('point_d', function (Blueprint $table) {
            $table->string('fileD1')->after('scorSubItemD1')->nullable();
            $table->string('fileD2')->after('scorSubItemD2')->nullable();
            $table->string('fileD3')->after('scorSubItemD3')->nullable();
            $table->string('fileD4')->after('scorSubItemD4')->nullable();
            $table->string('fileD5')->after('scorSubItemD5')->nullable();
            $table->string('fileD6')->after('scorSubItemD6')->nullable();
            $table->string('fileD7')->after('scorSubItemD7')->nullable();
            $table->string('fileD8')->after('scorSubItemD8')->nullable();
            $table->string('fileD9')->after('scorSubItemD9')->nullable();
            $table->string('fileD10')->after('scorSubItemD10')->nullable();
            $table->string('fileD11')->after('scorSubItemD11')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('point_d', function (Blueprint $table) {
            $table->dropColumn('fileD1');
            $table->dropColumn('fileD2');
            $table->dropColumn('fileD3');
            $table->dropColumn('fileD4');
            $table->dropColumn('fileD5');
            $table->dropColumn('fileD6');
            $table->dropColumn('fileD7');
            $table->dropColumn('fileD8');
            $table->dropColumn('fileD9');
            $table->dropColumn('fileD10');
            $table->dropColumn('fileD11');
        });
    }
}
