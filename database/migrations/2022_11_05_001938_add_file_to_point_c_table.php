<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFileToPointCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('point_c', function (Blueprint $table) {
            $table->string('fileC1')->after('scorSubItemC1')->nullable();
            $table->string('fileC2')->after('scorSubItemC2')->nullable();
            $table->string('fileC3')->after('scorSubItemC3')->nullable();
            $table->string('fileC4')->after('scorSubItemC4')->nullable();
            $table->string('fileC5')->after('scorSubItemC5')->nullable();
            $table->string('fileC6')->after('scorSubItemC6')->nullable();
            $table->string('fileC7')->after('scorSubItemC7')->nullable();
            $table->string('fileC8')->after('scorSubItemC8')->nullable();
            $table->string('fileC9')->after('scorSubItemC9')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('point_c', function (Blueprint $table) {
            $table->dropColumn('fileC1');
            $table->dropColumn('fileC2');
            $table->dropColumn('fileC3');
            $table->dropColumn('fileC4');
            $table->dropColumn('fileC5');
            $table->dropColumn('fileC6');
            $table->dropColumn('fileC7');
            $table->dropColumn('fileC8');
            $table->dropColumn('fileC9');
        });
    }
}
