<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_d', function (Blueprint $table) {
            $table->id();
            $table->enum('D1', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD1', 8, 0);
            $table->float('scorMaxD1', 8, 0);
            $table->float('scorSubItemD1', 8, 3);

            $table->enum('D2', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD2', 8, 0);
            $table->float('scorMaxD2', 8, 0);
            $table->float('scorSubItemD2', 8, 3);
            $table->integer('JumlahYangDihasilkanD2_2_in')->nullable();
            $table->string('SkorTambahanD2_2', 20);
            $table->integer('JumlahYangDihasilkanD2_3_in')->nullable();
            $table->string('SkorTambahanD2_3', 20);
            $table->integer('JumlahYangDihasilkanD2_4_in')->nullable();
            $table->string('SkorTambahanD2_4', 20);
            $table->integer('JumlahYangDihasilkanD2_5_in')->nullable();
            $table->string('SkorTambahanD2_5', 20);
            $table->string('SkorTambahanJumlahD2', 20);
            $table->string('JumlahSkorYangDiHasilkanD2', 20);
            $table->float('SkorTambahanJumlahSkorD2', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemD2', 8, 3);

            $table->enum('D3', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD3', 8, 0);
            $table->float('scorMaxD3', 8, 0);
            $table->float('scorSubItemD3', 8, 3);
            $table->integer('JumlahYangDihasilkanD3_2_in')->nullable();
            $table->string('SkorTambahanD3_2', 20);
            $table->integer('JumlahYangDihasilkanD3_3_in')->nullable();
            $table->string('SkorTambahanD3_3', 20);
            $table->integer('JumlahYangDihasilkanD3_4_in')->nullable();
            $table->string('SkorTambahanD3_4', 20);
            $table->integer('JumlahYangDihasilkanD3_5_in')->nullable();
            $table->string('SkorTambahanD3_5', 20);
            $table->string('SkorTambahanJumlahD3', 20);
            $table->string('JumlahSkorYangDiHasilkanD3', 20);
            $table->float('SkorTambahanJumlahSkorD3', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemD3', 8, 3);

            $table->enum('D4', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD4', 8, 0);
            $table->float('scorMaxD4', 8, 0);
            $table->float('scorSubItemD4', 8, 3);
            $table->integer('JumlahYangDihasilkanD4_3_in')->nullable();
            $table->string('SkorTambahanD4_3', 20);
            $table->integer('JumlahYangDihasilkanD4_4_in')->nullable();
            $table->string('SkorTambahanD4_4', 20);
            $table->integer('JumlahYangDihasilkanD4_5_in')->nullable();
            $table->string('SkorTambahanD4_5', 20);
            $table->string('SkorTambahanJumlahD4', 20);
            $table->string('JumlahSkorYangDiHasilkanD4', 20);
            $table->float('SkorTambahanJumlahSkorD4', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemD4', 8, 3);

            $table->enum('D5', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD5', 8, 0);
            $table->float('scorMaxD5', 8, 0);
            $table->float('scorSubItemD5', 8, 3);
            $table->integer('JumlahYangDihasilkanD5_3_in')->nullable();
            $table->string('SkorTambahanD5_3', 20);
            $table->integer('JumlahYangDihasilkanD5_4_in')->nullable();
            $table->string('SkorTambahanD5_4', 20);
            $table->integer('JumlahYangDihasilkanD5_5_in')->nullable();
            $table->string('SkorTambahanD5_5', 20);
            $table->string('SkorTambahanJumlahD5', 20);
            $table->string('JumlahSkorYangDiHasilkanD5', 20);
            $table->float('SkorTambahanJumlahSkorD5', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemD5', 8, 3);

            $table->enum('D6', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD6', 8, 0);
            $table->float('scorMaxD6', 8, 0);
            $table->float('scorSubItemD6', 8, 3);
            $table->integer('JumlahYangDihasilkanD6_2_in')->nullable();
            $table->string('SkorTambahanD6_2', 20);
            $table->integer('JumlahYangDihasilkanD6_3_in')->nullable();
            $table->string('SkorTambahanD6_3', 20);
            $table->integer('JumlahYangDihasilkanD6_4_in')->nullable();
            $table->string('SkorTambahanD6_4', 20);
            $table->integer('JumlahYangDihasilkanD6_5_in')->nullable();
            $table->string('SkorTambahanD6_5', 20);
            $table->string('SkorTambahanJumlahD6', 20);
            $table->string('JumlahSkorYangDiHasilkanD6', 20);
            $table->float('SkorTambahanJumlahSkorD6', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemD6', 8, 3);

            $table->enum('D7', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD7', 8, 0);
            $table->float('scorMaxD7', 8, 0);
            $table->float('scorSubItemD7', 8, 3);
            $table->integer('JumlahYangDihasilkanD7_5_in')->nullable();
            $table->string('SkorTambahanD7_5', 20);
            $table->string('SkorTambahanJumlahD7', 20);
            $table->string('JumlahSkorYangDiHasilkanD7', 20);
            $table->float('SkorTambahanJumlahSkorD7', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemD7', 8, 3);

            $table->enum('D8', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD8', 8, 0);
            $table->float('scorMaxD8', 8, 0);
            $table->float('scorSubItemD8', 8, 3);
            $table->integer('JumlahYangDihasilkanD8_3_in')->nullable();
            $table->string('SkorTambahanD8_3', 20);
            $table->integer('JumlahYangDihasilkanD8_4_in')->nullable();
            $table->string('SkorTambahanD8_4', 20);
            $table->integer('JumlahYangDihasilkanD8_5_in')->nullable();
            $table->string('SkorTambahanD8_5', 20);
            $table->string('SkorTambahanJumlahD8', 20);
            $table->string('JumlahSkorYangDiHasilkanD8', 20);
            $table->float('SkorTambahanJumlahSkorD8', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemD8', 8, 3);

            $table->enum('D9', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD9', 8, 0);
            $table->float('scorMaxD9', 8, 0);
            $table->float('scorSubItemD9', 8, 3);
            $table->integer('JumlahYangDihasilkanD9_2_in')->nullable();
            $table->string('SkorTambahanD9_2', 20);
            $table->integer('JumlahYangDihasilkanD9_3_in')->nullable();
            $table->string('SkorTambahanD9_3', 20);
            $table->integer('JumlahYangDihasilkanD9_4_in')->nullable();
            $table->string('SkorTambahanD9_4', 20);
            $table->integer('JumlahYangDihasilkanD9_5_in')->nullable();
            $table->string('SkorTambahanD9_5', 20);
            $table->string('SkorTambahanJumlahD9', 20);
            $table->string('JumlahSkorYangDiHasilkanD9', 20);
            $table->float('SkorTambahanJumlahSkorD9', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemD9', 8, 3);

            $table->enum('D10', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD10', 8, 0);
            $table->float('scorMaxD10', 8, 0);
            $table->float('scorSubItemD10', 8, 3);
            $table->integer('JumlahYangDihasilkanD10_3_in')->nullable();
            $table->string('SkorTambahanD10_3', 20);
            $table->integer('JumlahYangDihasilkanD10_4_in')->nullable();
            $table->string('SkorTambahanD10_4', 20);
            $table->integer('JumlahYangDihasilkanD10_5_in')->nullable();
            $table->string('SkorTambahanD10_5', 20);
            $table->string('SkorTambahanJumlahD10', 20);
            $table->string('JumlahSkorYangDiHasilkanD10', 20);
            $table->float('SkorTambahanJumlahSkorD10', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemD10', 8, 3);

            $table->enum('D11', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorD11', 8, 0);
            $table->float('scorMaxD11', 8, 0);
            $table->float('scorSubItemD11', 8, 3);
            $table->integer('JumlahYangDihasilkanD11_3_in')->nullable();
            $table->string('SkorTambahanD11_3', 20);
            $table->integer('JumlahYangDihasilkanD11_4_in')->nullable();
            $table->string('SkorTambahanD11_4', 20);
            $table->integer('JumlahYangDihasilkanD11_5_in')->nullable();
            $table->string('SkorTambahanD11_5', 20);
            $table->string('SkorTambahanJumlahD11', 20);
            $table->string('JumlahSkorYangDiHasilkanD11', 20);
            $table->float('SkorTambahanJumlahSkorD11', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemD11', 8, 3);

            $table->float('TotalSkorUnsurPenunjang', 8, 3);
            $table->string('TotalKelebihaD2', 20);
            $table->string('TotalKelebihaD3', 20);
            $table->string('TotalKelebihaD4', 20);
            $table->string('TotalKelebihaD5', 20);
            $table->string('TotalKelebihaD6', 20);
            $table->string('TotalKelebihaD7', 20);
            $table->string('TotalKelebihaD8', 20);
            $table->string('TotalKelebihaD9', 20);
            $table->string('TotalKelebihaD10', 20);
            $table->string('TotalKelebihaD11', 20);
            $table->string('TotalKelebihanSkor', 20);
            $table->string('NilaiUnsurPenunjang', 20);
            $table->string('NilaiTambahUnsurPenunjang', 20);
            $table->float('ResultSumNilaiTotalUnsurPenunjang', 8, 2);

            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('point_d');
    }
}
