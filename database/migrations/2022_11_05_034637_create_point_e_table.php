<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_e', function (Blueprint $table) {
            $table->id();
            $table->enum('E1_1', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorE1_1', 8, 0);
            $table->float('scorMaxE1_1', 8, 0);
            $table->float('scorSubItemE1_1', 8, 3);

            $table->enum('E1_2', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorE1_2', 8, 0);
            $table->float('scorMaxE1_2', 8, 0);
            $table->float('scorSubItemE1_2', 8, 3);

            $table->enum('E1_3', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorE1_3', 8, 0);
            $table->float('scorMaxE1_3', 8, 0);
            $table->float('scorSubItemE1_3', 8, 3);

            $table->enum('E1_4', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorE1_4', 8, 0);
            $table->float('scorMaxE1_4', 8, 0);
            $table->float('scorSubItemE1_4', 8, 3);

            $table->enum('E1_5', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorE1_5', 8, 0);
            $table->float('scorMaxE1_5', 8, 0);
            $table->float('scorSubItemE1_5', 8, 3);

            $table->enum('E1_6', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorE1_6', 8, 0);
            $table->float('scorMaxE1_6', 8, 0);
            $table->float('scorSubItemE1_6', 8, 3);

            $table->enum('E2_1', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorE2_1', 8, 0);
            $table->float('scorMaxE2_1', 8, 0);
            $table->float('scorSubItemE2_1', 8, 3);

            $table->enum('E2_2', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorE2_2', 8, 0);
            $table->float('scorMaxE2_2', 8, 0);
            $table->float('scorSubItemE2_2', 8, 3);

            $table->enum('E2_3', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorE2_3', 8, 0);
            $table->float('scorMaxE2_3', 8, 0);
            $table->float('scorSubItemE2_3', 8, 3);

            $table->enum('E2_4', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorE2_4', 8, 0);
            $table->float('scorMaxE2_4', 8, 0);
            $table->float('scorSubItemE2_4', 8, 3);

            $table->float('SumSkor', 8, 3);
            $table->float('NilaiUnsurPengabdian', 8, 2);
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
        Schema::dropIfExists('point_e');
    }
}
