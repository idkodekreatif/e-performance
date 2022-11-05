<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFileToPointATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('point_a', function (Blueprint $table) {
            $table->string('fileA1')->after('scorSubItemA1')->nullable();
            $table->string('fileA2')->after('scorSubItemA2')->nullable();
            $table->string('fileA3')->after('scorSubItemA3')->nullable();
            $table->string('fileA4')->after('scorSubItemA4')->nullable();
            $table->string('fileA5')->after('scorSubItemA5')->nullable();
            $table->string('fileA6')->after('scorSubItemA6')->nullable();
            $table->string('fileA7')->after('scorSubItemA7')->nullable();
            $table->string('fileA8')->after('scorSubItemA8')->nullable();
            $table->string('fileA9')->after('scorSubItemA9')->nullable();
            $table->string('fileA10')->after('scorSubItemA10')->nullable();
            $table->string('fileA11')->after('scorSubItemA11')->nullable();
            $table->string('fileA12')->after('scorSubItemA12')->nullable();
            $table->string('fileA13')->after('scorSubItemA13')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('point_a', function (Blueprint $table) {
            $table->dropColumn('fileA1');
            $table->dropColumn('fileA2');
            $table->dropColumn('fileA3');
            $table->dropColumn('fileA4');
            $table->dropColumn('fileA5');
            $table->dropColumn('fileA6');
            $table->dropColumn('fileA7');
            $table->dropColumn('fileA8');
            $table->dropColumn('fileA9');
            $table->dropColumn('fileA10');
            $table->dropColumn('fileA11');
            $table->dropColumn('fileA13');
            $table->dropColumn('fileA14');
        });
    }
}
