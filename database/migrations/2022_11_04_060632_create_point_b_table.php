<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_b', function (Blueprint $table) {
            $table->id();
            $table->enum('B1', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB1', 8, 0);
            $table->float('scorMaxB1', 8, 0);
            $table->float('scorSubItemB1', 8, 3);
            $table->integer('JumlahYangDihasilkanB1_2_in')->nullable();
            $table->string('SkorTambahanB1_2', 20);
            $table->integer('JumlahYangDihasilkanB1_3_in')->nullable();
            $table->string('SkorTambahanB1_3', 20);
            $table->integer('JumlahYangDihasilkanB1_4_in')->nullable();
            $table->string('SkorTambahanB1_4', 20);
            $table->integer('JumlahYangDihasilkanB1_5_in')->nullable();
            $table->string('SkorTambahanB1_5', 20);
            $table->string('SkorTambahanJumlahB1', 20);
            $table->string('JumlahSkorYangDiHasilkanB1', 20);
            $table->float('SkorTambahanJumlahSkorB1', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB1', 8, 3);

            $table->enum('B2', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB2', 8, 0);
            $table->float('scorMaxB2', 8, 0);
            $table->float('scorSubItemB2', 8, 3);
            $table->integer('JumlahYangDihasilkanB2_4_in')->nullable();
            $table->string('SkorTambahanB2_4', 20);
            $table->integer('JumlahYangDihasilkanB2_5_in')->nullable();
            $table->string('SkorTambahanB2_5', 20);
            $table->string('SkorTambahanJumlahB2');
            $table->string('JumlahSkorYangDiHasilkanB2', 20);
            $table->float('SkorTambahanJumlahSkorB2', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB2', 8, 3);

            $table->enum('B3', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB3', 8, 0);
            $table->float('scorMaxB3', 8, 0);
            $table->float('scorSubItemB3', 8, 3);
            $table->integer('JumlahYangDihasilkanB3_4_in')->nullable();
            $table->string('SkorTambahanB3_4', 20);
            $table->integer('JumlahYangDihasilkanB3_5_in')->nullable();
            $table->string('SkorTambahanB3_5', 20);
            $table->string('SkorTambahanJumlahB3', 20);
            $table->string('JumlahSkorYangDiHasilkanB3', 20);
            $table->float('SkorTambahanJumlahSkorB3', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB3', 8, 3);

            $table->enum('B4', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB4', 8, 0);
            $table->float('scorMaxB4', 8, 0);
            $table->float('scorSubItemB4', 8, 3);

            $table->enum('B5', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB5', 8, 0);
            $table->float('scorMaxB5', 8, 0);
            $table->float('scorSubItemB5', 8, 3);
            $table->integer('JumlahYangDihasilkanB5_5_in')->nullable();
            $table->string('SkorTambahanB5_5', 20);
            $table->string('SkorTambahanJumlahB5', 20);
            $table->string('JumlahSkorYangDiHasilkanB5', 20);
            $table->float('SkorTambahanJumlahSkorB5', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB5', 8, 3);

            $table->enum('B6', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB6', 8, 0);
            $table->float('scorMaxB6', 8, 0);
            $table->float('scorSubItemB6', 8, 3);
            $table->integer('JumlahYangDihasilkanB6_5_in')->nullable();
            $table->string('SkorTambahanB6_5', 20);
            $table->string('SkorTambahanJumlahB6', 20);
            $table->string('JumlahSkorYangDiHasilkanB6', 20);
            $table->float('SkorTambahanJumlahSkorB6', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB6', 8, 3);

            $table->enum('B7', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB7', 8, 0);
            $table->float('scorMaxB7', 8, 0);
            $table->float('scorSubItemB7', 8, 3);
            $table->integer('JumlahYangDihasilkanB7_5_in')->nullable();
            $table->string('SkorTambahanB7_5', 20);
            $table->string('SkorTambahanJumlahB7', 20);
            $table->string('JumlahSkorYangDiHasilkanB7', 20);
            $table->float('SkorTambahanJumlahSkorB7', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB7', 8, 3);

            $table->enum('B8', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB8', 8, 0);
            $table->float('scorMaxB8', 8, 0);
            $table->float('scorSubItemB8', 8, 3);

            $table->enum('B9', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB9', 8, 0);
            $table->float('scorMaxB9', 8, 0);
            $table->float('scorSubItemB9', 8, 3);
            $table->integer('JumlahYangDihasilkanB9_3_in')->nullable();
            $table->string('SkorTambahanB9_3', 20);
            $table->integer('JumlahYangDihasilkanB9_5_in')->nullable();
            $table->string('SkorTambahanB9_5', 20);
            $table->string('SkorTambahanJumlahB9', 20);
            $table->string('JumlahSkorYangDiHasilkanB9', 20);
            $table->float('SkorTambahanJumlahSkorB9', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB9', 8, 3);

            $table->enum('B10', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB10', 8, 0);
            $table->float('scorMaxB10', 8, 0);
            $table->float('scorSubItemB10', 8, 3);
            $table->integer('JumlahYangDihasilkanB10_3_in')->nullable();
            $table->string('SkorTambahanB10_3', 20);
            $table->integer('JumlahYangDihasilkanB10_5_in')->nullable();
            $table->string('SkorTambahanB10_5', 20);
            $table->string('SkorTambahanJumlahB10', 20);
            $table->string('JumlahSkorYangDiHasilkanB10', 20);
            $table->float('SkorTambahanJumlahSkorB10', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB10', 8, 3);

            $table->enum('B11', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB11', 8, 0);
            $table->float('scorMaxB11', 8, 0);
            $table->float('scorSubItemB11', 8, 3);
            $table->integer('JumlahYangDihasilkanB11_5_in')->nullable();
            $table->string('SkorTambahanB11_5', 20);
            $table->string('SkorTambahanJumlahB11', 20);
            $table->string('JumlahSkorYangDiHasilkanB11', 20);
            $table->float('SkorTambahanJumlahSkorB11', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB11', 8, 3);

            $table->enum('B12', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB12', 8, 0);
            $table->float('scorMaxB12', 8, 0);
            $table->float('scorSubItemB12', 8, 3);
            $table->integer('JumlahYangDihasilkanB12_5_in')->nullable();
            $table->string('SkorTambahanB12_5', 20);
            $table->string('SkorTambahanJumlahB12', 20);
            $table->string('JumlahSkorYangDiHasilkanB12', 20);
            $table->float('SkorTambahanJumlahSkorB12', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB12', 8, 3);

            $table->enum('B13', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB13', 8, 0);
            $table->float('scorMaxB13', 8, 0);
            $table->float('scorSubItemB13', 8, 3);
            $table->integer('JumlahYangDihasilkanB13_3_in')->nullable();
            $table->string('SkorTambahanB13_3', 20);
            $table->integer('JumlahYangDihasilkanB13_4_in')->nullable();
            $table->string('SkorTambahanB13_4', 20);
            $table->integer('JumlahYangDihasilkanB13_5_in')->nullable();
            $table->string('SkorTambahanB13_5', 20);
            $table->string('SkorTambahanJumlahB13', 20);
            $table->string('JumlahSkorYangDiHasilkanB13', 20);
            $table->float('SkorTambahanJumlahSkorB13', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB13', 8, 3);

            $table->enum('B14', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB14', 8, 0);
            $table->float('scorMaxB14', 8, 0);
            $table->float('scorSubItemB14', 8, 3);
            $table->integer('JumlahYangDihasilkanB14_2_in')->nullable();
            $table->string('SkorTambahanB14_2', 20);
            $table->integer('JumlahYangDihasilkanB14_3_in')->nullable();
            $table->string('SkorTambahanB14_3', 20);
            $table->integer('JumlahYangDihasilkanB14_4_in')->nullable();
            $table->string('SkorTambahanB14_4', 20);
            $table->integer('JumlahYangDihasilkanB14_5_in')->nullable();
            $table->string('SkorTambahanB14_5', 20);
            $table->string('SkorTambahanJumlahB14', 20);
            $table->string('JumlahSkorYangDiHasilkanB14', 20);
            $table->float('SkorTambahanJumlahSkorB14', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB14', 8, 3);

            $table->enum('B15', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB15', 8, 0);
            $table->float('scorMaxB15', 8, 0);
            $table->float('scorSubItemB15', 8, 3);
            $table->integer('JumlahYangDihasilkanB15_3_in')->nullable();
            $table->string('SkorTambahanB15_3', 20);
            $table->integer('JumlahYangDihasilkanB15_4_in')->nullable();
            $table->string('SkorTambahanB15_4', 20);
            $table->integer('JumlahYangDihasilkanB15_5_in')->nullable();
            $table->string('SkorTambahanB15_5', 20);
            $table->string('SkorTambahanJumlahB15', 20);
            $table->string('JumlahSkorYangDiHasilkanB15', 20);
            $table->float('SkorTambahanJumlahSkorB15', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB15', 8, 3);

            $table->enum('B16', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB16', 8, 0);
            $table->float('scorMaxB16', 8, 0);
            $table->float('scorSubItemB16', 8, 3);

            $table->enum('B17', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB17', 8, 0);
            $table->float('scorMaxB17', 8, 0);
            $table->float('scorSubItemB17', 8, 3);
            $table->integer('JumlahYangDihasilkanB17_2_in')->nullable();
            $table->string('SkorTambahanB17_2', 20);
            $table->integer('JumlahYangDihasilkanB17_3_in')->nullable();
            $table->string('SkorTambahanB17_3', 20);
            $table->integer('JumlahYangDihasilkanB17_4_in')->nullable();
            $table->string('SkorTambahanB17_4', 20);
            $table->integer('JumlahYangDihasilkanB17_5_in')->nullable();
            $table->string('SkorTambahanB17_5', 20);
            $table->string('SkorTambahanJumlahB17', 20);
            $table->string('JumlahSkorYangDiHasilkanB17', 20);
            $table->float('SkorTambahanJumlahSkorB17', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemB17', 8, 3);

            $table->enum('B18', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorB18', 8, 0);
            $table->float('scorMaxB18', 8, 0);
            $table->float('scorSubItemB18', 8, 3);

            $table->float('TotalSkorPenelitianPointB', 8, 3);
            $table->string('TotalKelebihaB1', 20);
            $table->string('TotalKelebihaB2', 20);
            $table->string('TotalKelebihaB3', 20);
            $table->string('TotalKelebihaB5', 20);
            $table->string('TotalKelebihaB6', 20);
            $table->string('TotalKelebihaB7', 20);
            $table->string('TotalKelebihaB9', 20);
            $table->string('TotalKelebihaB10', 20);
            $table->string('TotalKelebihaB11', 20);
            $table->string('TotalKelebihaB12', 20);
            $table->string('TotalKelebihaB13', 20);
            $table->string('TotalKelebihaB14', 20);
            $table->string('TotalKelebihaB15', 20);
            $table->string('TotalKelebihaB17', 20);
            $table->string('TotalKelebihanSkor', 20);
            $table->string('NilaiPenelitian', 20);
            $table->string('NilaiTambahPenelitian', 20);
            $table->string('NilaiTotalPenelitiandanKaryaIlmiah', 20);

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
        Schema::dropIfExists('point_b');
    }
}
