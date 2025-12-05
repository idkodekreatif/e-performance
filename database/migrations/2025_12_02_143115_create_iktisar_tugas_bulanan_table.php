<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIktisarTugasBulananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iktisar_tugas_bulanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('iktisar_tugas_id')
                ->constrained('iktisar_tugas')
                ->cascadeOnDelete();

            $table->unsignedTinyInteger('bulan'); // 1–12
            $table->string('persentase')->nullable();
            $table->text('uraian')->nullable();
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
        Schema::dropIfExists('iktisar_tugas_bulanan');
    }
}
