<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaportUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raport_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('point_a_id')->nullable();
            $table->unsignedBigInteger('point_b_id')->nullable();
            $table->unsignedBigInteger('point_c_id')->nullable();
            $table->unsignedBigInteger('point_d_id')->nullable();
            $table->unsignedBigInteger('point_e_id')->nullable();
            $table->timestamps();

            $table->foreign('point_a_id')->references('id')->on('point_a');
            $table->foreign('point_b_id')->references('id')->on('point_b');
            $table->foreign('point_c_id')->references('id')->on('point_c');
            $table->foreign('point_d_id')->references('id')->on('point_d');
            $table->foreign('point_e_id')->references('id')->on('point_e');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('raport_user', function (Blueprint $table) {
            $table->dropForeign(['point_a_id']);
            $table->dropForeign(['point_b_id']);
            $table->dropForeign(['point_c_id']);
            $table->dropForeign(['point_d_id']);
            $table->dropForeign(['point_e_id']);
        });

        Schema::dropIfExists('raport_user');
    }
}
