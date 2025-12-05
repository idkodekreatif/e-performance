<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIktisarTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iktisar_tugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jabatan_struktural_id')
                ->constrained('jabatan_struktural')
                ->cascadeOnDelete();

            $table->string('kategori_tugas');
            $table->text('deskripsi_tugas');
            $table->string('target')->nullable();
            $table->string('metode_monitoring')->nullable();

            // tahun format year (YYYY)
            $table->year('tahun');
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
        Schema::dropIfExists('iktisar_tugas');
    }
}
