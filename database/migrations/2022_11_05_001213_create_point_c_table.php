<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_c', function (Blueprint $table) {
            $table->id();
            $table->enum('C1', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorC1', 8, 0);
            $table->float('scorMaxC1', 8, 0);
            $table->float('scorSubItemC1', 8, 3);
            $table->integer('JumlahYangDihasilkanC1_2_in')->nullable();
            $table->string('SkorTambahanC1_2', 20);
            $table->integer('JumlahYangDihasilkanC1_3_in')->nullable();
            $table->string('SkorTambahanC1_3', 20);
            $table->integer('JumlahYangDihasilkanC1_4_in')->nullable();
            $table->string('SkorTambahanC1_4', 20);
            $table->integer('JumlahYangDihasilkanC1_5_in')->nullable();
            $table->string('SkorTambahanC1_5', 20);
            $table->string('SkorTambahanJumlahC1', 20);
            $table->string('JumlahSkorYangDiHasilkanC1', 20);
            $table->float('SkorTambahanJumlahSkorC1', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemC1', 8, 3);

            $table->enum('C2', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorC2', 8, 0);
            $table->float('scorMaxC2', 8, 0);
            $table->float('scorSubItemC2', 8, 3);
            $table->integer('JumlahYangDihasilkanC2_2_in')->nullable();
            $table->string('SkorTambahanC2_2', 20);
            $table->integer('JumlahYangDihasilkanC2_3_in')->nullable();
            $table->string('SkorTambahanC2_3', 20);
            $table->integer('JumlahYangDihasilkanC2_4_in')->nullable();
            $table->string('SkorTambahanC2_4', 20);
            $table->integer('JumlahYangDihasilkanC2_5_in')->nullable();
            $table->string('SkorTambahanC2_5', 20);
            $table->string('SkorTambahanJumlahC2', 20);
            $table->string('JumlahSkorYangDiHasilkanC2', 20);
            $table->float('SkorTambahanJumlahSkorC2', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemC2', 8, 3);

            $table->enum('C3', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorC3', 8, 0);
            $table->float('scorMaxC3', 8, 0);
            $table->float('scorSubItemC3', 8, 3);
            $table->integer('JumlahYangDihasilkanC3_4_in')->nullable();
            $table->string('SkorTambahanC3_4', 20);
            $table->integer('JumlahYangDihasilkanC3_5_in')->nullable();
            $table->string('SkorTambahanC3_5', 20);
            $table->string('SkorTambahanJumlahC3', 20);
            $table->string('JumlahSkorYangDiHasilkanC3', 20);
            $table->float('SkorTambahanJumlahSkorC3', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemC3', 8, 3);

            $table->enum('C4', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorC4', 8, 0);
            $table->float('scorMaxC4', 8, 0);
            $table->float('scorSubItemC4', 8, 3);
            $table->integer('JumlahYangDihasilkanC4_2_in')->nullable();
            $table->string('SkorTambahanC4_2', 20);
            $table->integer('JumlahYangDihasilkanC4_3_in')->nullable();
            $table->string('SkorTambahanC4_3', 20);
            $table->integer('JumlahYangDihasilkanC4_4_in')->nullable();
            $table->string('SkorTambahanC4_4', 20);
            $table->integer('JumlahYangDihasilkanC4_5_in')->nullable();
            $table->string('SkorTambahanC4_5', 20);
            $table->string('SkorTambahanJumlahC4', 20);
            $table->string('JumlahSkorYangDiHasilkanC4', 20);
            $table->float('SkorTambahanJumlahSkorC4', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemC4', 8, 3);

            $table->enum('C5', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorC5', 8, 0);
            $table->float('scorMaxC5', 8, 0);
            $table->float('scorSubItemC5', 8, 3);
            $table->integer('JumlahYangDihasilkanC5_2_in')->nullable();
            $table->string('SkorTambahanC5_2', 20);
            $table->integer('JumlahYangDihasilkanC5_3_in')->nullable();
            $table->string('SkorTambahanC5_3', 20);
            $table->integer('JumlahYangDihasilkanC5_4_in')->nullable();
            $table->string('SkorTambahanC5_4', 20);
            $table->integer('JumlahYangDihasilkanC5_5_in')->nullable();
            $table->string('SkorTambahanC5_5', 20);
            $table->string('SkorTambahanJumlahC5', 20);
            $table->string('JumlahSkorYangDiHasilkanC5', 20);
            $table->float('SkorTambahanJumlahSkorC5', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemC5', 8, 3);

            $table->enum('C6', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorC6', 8, 0);
            $table->float('scorMaxC6', 8, 0);
            $table->float('scorSubItemC6', 8, 3);
            $table->integer('JumlahYangDihasilkanC6_2_in')->nullable();
            $table->string('SkorTambahanC6_2', 20);
            $table->integer('JumlahYangDihasilkanC6_3_in')->nullable();
            $table->string('SkorTambahanC6_3', 20);
            $table->integer('JumlahYangDihasilkanC6_4_in')->nullable();
            $table->string('SkorTambahanC6_4', 20);
            $table->integer('JumlahYangDihasilkanC6_5_in')->nullable();
            $table->string('SkorTambahanC6_5', 20);
            $table->string('SkorTambahanJumlahC6', 20);
            $table->string('JumlahSkorYangDiHasilkanC6', 20);
            $table->float('SkorTambahanJumlahSkorC6', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemC6', 8, 3);

            $table->enum('C7', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorC7', 8, 0);
            $table->float('scorMaxC7', 8, 0);
            $table->float('scorSubItemC7', 8, 3);
            $table->integer('JumlahYangDihasilkanC7_2_in')->nullable();
            $table->string('SkorTambahanC7_2', 20);
            $table->integer('JumlahYangDihasilkanC7_3_in')->nullable();
            $table->string('SkorTambahanC7_3', 20);
            $table->integer('JumlahYangDihasilkanC7_4_in')->nullable();
            $table->string('SkorTambahanC7_4', 20);
            $table->integer('JumlahYangDihasilkanC7_5_in')->nullable();
            $table->string('SkorTambahanC7_5', 20);
            $table->string('SkorTambahanJumlahC7', 20);
            $table->string('JumlahSkorYangDiHasilkanC7', 20);
            $table->float('SkorTambahanJumlahSkorC7', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemC7', 8, 3);

            $table->enum('C8', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorC8', 8, 0);
            $table->float('scorMaxC8', 8, 0);
            $table->float('scorSubItemC8', 8, 3);
            $table->integer('JumlahYangDihasilkanC8_2_in')->nullable();
            $table->string('SkorTambahanC8_2', 20);
            $table->integer('JumlahYangDihasilkanC8_3_in')->nullable();
            $table->string('SkorTambahanC8_3', 20);
            $table->integer('JumlahYangDihasilkanC8_4_in')->nullable();
            $table->string('SkorTambahanC8_4', 20);
            $table->integer('JumlahYangDihasilkanC8_5_in')->nullable();
            $table->string('SkorTambahanC8_5', 20);
            $table->string('SkorTambahanJumlahC8', 20);
            $table->string('JumlahSkorYangDiHasilkanC8', 20);
            $table->float('SkorTambahanJumlahSkorC8', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemC8', 8, 3);

            $table->enum('C9', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorC9', 8, 0);
            $table->float('scorMaxC9', 8, 0);
            $table->float('scorSubItemC9', 8, 3);
            $table->integer('JumlahYangDihasilkanC9_2_in')->nullable();
            $table->string('SkorTambahanC9_2', 20);
            $table->integer('JumlahYangDihasilkanC9_3_in')->nullable();
            $table->string('SkorTambahanC9_3', 20);
            $table->integer('JumlahYangDihasilkanC9_4_in')->nullable();
            $table->string('SkorTambahanC9_4', 20);
            $table->integer('JumlahYangDihasilkanC9_5_in')->nullable();
            $table->string('SkorTambahanC9_5', 20);
            $table->string('SkorTambahanJumlahC9', 20);
            $table->string('JumlahSkorYangDiHasilkanC9', 20);
            $table->float('SkorTambahanJumlahSkorC9', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemC9', 8, 3);

            $table->float('TotalSkorPengabdianKepadaMasyarakat', 8, 3);
            $table->string('TotalKelebihaC1', 20);
            $table->string('TotalKelebihaC2', 20);
            $table->string('TotalKelebihaC3', 20);
            $table->string('TotalKelebihaC4', 20);
            $table->string('TotalKelebihaC5', 20);
            $table->string('TotalKelebihaC6', 20);
            $table->string('TotalKelebihaC7', 20);
            $table->string('TotalKelebihaC8', 20);
            $table->string('TotalKelebihaC9', 20);
            $table->string('TotalKelebihanSkor', 20);
            $table->string('NilaiPengabdianKepadaMasyarakat', 20);
            $table->string('NilaiTambahPengabdianKepadaMasyarakat', 20);
            $table->float('NilaiTotalPengabdianKepadaMasyarakat', 8, 2);

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
        Schema::dropIfExists('point_c');
    }
}
