<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_a', function (Blueprint $table) {
            $table->id();
            $table->enum('A1', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA1', 8, 0);
            $table->float('scorMaxA1', 8, 0);
            $table->float('scorSubItemA1', 8, 3);
            $table->enum('A2', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA2', 8, 0);
            $table->float('scorMaxA2', 8, 0);
            $table->float('scorSubItemA2', 8, 3);
            $table->enum('A3', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA3', 8, 0);
            $table->float('scorMaxA3', 8, 0);
            $table->float('scorSubItemA3', 8, 3);
            $table->enum('A4', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA4', 8, 0);
            $table->float('scorMaxA4', 8, 0);
            $table->float('scorSubItemA4', 8, 3);
            $table->enum('A5', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA5', 8, 0);
            $table->float('scorMaxA5', 8, 0);
            $table->float('scorSubItemA5', 8, 3);
            $table->enum('A6', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA6', 8, 0);
            $table->float('scorMaxA6', 8, 0);
            $table->float('scorSubItemA6', 8, 3);
            $table->enum('A7', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA7', 8, 0);
            $table->float('scorMaxA7', 8, 0);
            $table->float('scorSubItemA7', 8, 3);
            $table->enum('A8', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA8', 8, 0);
            $table->float('scorMaxA8', 8, 0);
            $table->float('scorSubItemA8', 8, 3);
            $table->enum('A9', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA9', 8, 0);
            $table->float('scorMaxA9', 8, 0);
            $table->float('scorSubItemA9', 8, 3);
            $table->enum('A10', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA10', 8, 0);
            $table->float('scorMaxA10', 8, 0);
            $table->float('scorSubItemA10', 8, 3);
            $table->enum('A11', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA11', 8, 0);
            $table->float('scorMaxA11', 8, 0);
            $table->float('scorSubItemA11', 8, 3);
            $table->integer('tambahan_a11_in')->nullable();
            $table->string('SkorTambahanA11_5');
            $table->string('SkorTambahanJumlahA11_5');
            $table->string('JumlahSkorYangDiHasilkanA11_5');
            $table->float('JumlahSkorYangDiHasilkanBobotSubItemA11_5', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemA11_5', 8, 3);
            $table->enum('A12', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA12', 8, 0);
            $table->float('scorMaxA12', 8, 0);
            $table->float('scorSubItemA12', 8, 3);
            $table->integer('JumlahYangDihasilkanA12_3_in')->nullable();
            $table->string('SkorTambahanA12_3');
            $table->integer('JumlahYangDihasilkanA12_4_in')->nullable();
            $table->string('SkorTambahanA12_4');
            $table->integer('JumlahYangDihasilkanA12_5_in')->nullable();
            $table->string('SkorTambahanA12_5');
            $table->string('SkorTambahanJumlahA12');
            $table->string('JumlahSkorYangDiHasilkanA12');
            $table->float('SkorTambahanJumlahSkorA12', 8, 3);
            $table->float('SkorTambahanJumlahBobotSubItemA12', 8, 3);
            $table->enum('A13', ['1', '2', '3', '4', '5'])->nullable();
            $table->float('scorA13', 8, 0);
            $table->float('scorMaxA13', 8, 0);
            $table->float('scorSubItemA13', 8, 3);
            $table->float('TotalSkorPendidikanPointA', 8, 3);
            $table->string('TotalKelebihanA11');
            $table->string('TotalKelebihanA12');
            $table->string('TotalKelebihanSkor');
            $table->string('nilaiPendidikandanPengajaran');
            $table->string('NilaiTambahPendidikanDanPengajaran');
            $table->float('NilaiTotalPendidikanDanPengajaran', 8, 2);
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
        Schema::dropIfExists('point_a');
    }
}
