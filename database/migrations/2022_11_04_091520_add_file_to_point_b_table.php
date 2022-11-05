<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFileToPointBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('point_b', function (Blueprint $table) {
            $table->string('fileB1')->after('scorSubItemB1')->nullable();
            $table->string('fileB2')->after('scorSubItemB2')->nullable();
            $table->string('fileB3')->after('scorSubItemB3')->nullable();
            $table->string('fileB4')->after('scorSubItemB4')->nullable();
            $table->string('fileB5')->after('scorSubItemB5')->nullable();
            $table->string('fileB6')->after('scorSubItemB6')->nullable();
            $table->string('fileB7')->after('scorSubItemB7')->nullable();
            $table->string('fileB8')->after('scorSubItemB8')->nullable();
            $table->string('fileB9')->after('scorSubItemB9')->nullable();
            $table->string('fileB10')->after('scorSubItemB10')->nullable();
            $table->string('fileB11')->after('scorSubItemB11')->nullable();
            $table->string('fileB12')->after('scorSubItemB12')->nullable();
            $table->string('fileB13')->after('scorSubItemB13')->nullable();
            $table->string('fileB14')->after('scorSubItemB14')->nullable();
            $table->string('fileB15')->after('scorSubItemB15')->nullable();
            $table->string('fileB16')->after('scorSubItemB16')->nullable();
            $table->string('fileB17')->after('scorSubItemB17')->nullable();
            $table->string('fileB18')->after('scorSubItemB18')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('point_b', function (Blueprint $table) {
            $table->dropColumn('fileB1');
            $table->dropColumn('fileB2');
            $table->dropColumn('fileB3');
            $table->dropColumn('fileB4');
            $table->dropColumn('fileB5');
            $table->dropColumn('fileB6');
            $table->dropColumn('fileB7');
            $table->dropColumn('fileB8');
            $table->dropColumn('fileB9');
            $table->dropColumn('fileB10');
            $table->dropColumn('fileB11');
            $table->dropColumn('fileB12');
            $table->dropColumn('fileB13');
            $table->dropColumn('fileB14');
            $table->dropColumn('fileB15');
            $table->dropColumn('fileB16');
            $table->dropColumn('fileB17');
            $table->dropColumn('fileB18');
        });
    }
}
