<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIkbisKaUptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikbis_ka_upt', function (Blueprint $table) {
            $table->id();
            $table->enum('q1', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('q2', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('q3', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('q4', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('q5', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('q6', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('output_point_1', 50);
            $table->string('output_point_2', 50);
            $table->string('output_point_3', 50);
            $table->string('output_point_4', 50);
            $table->string('output_point_5', 50);
            $table->string('output_total_point_kinerja_perilaku', 50);
            $table->float('output_total_nilai_rata_rata_kinerja_perilaku', 8, 2);
            $table->float('output_total_sementara_kinerja_perilaku', 8, 2);

            $table->enum('kinerja_kompetensi_1', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_1')->nullable();
            $table->enum('kinerja_kompetensi_2', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_2')->nullable();
            $table->enum('kinerja_kompetensi_3', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_3')->nullable();
            $table->enum('kinerja_kompetensi_4', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_4')->nullable();
            $table->string('output_point_kinerja_kompetensi_1', 50);
            $table->string('output_point_kinerja_kompetensi_2', 50);
            $table->string('output_point_kinerja_kompetensi_3', 50);
            $table->string('output_point_kinerja_kompetensi_4', 50);
            $table->string('output_point_kinerja_kompetensi_5', 50);
            $table->string('output_total_point_kinerja_kompetensi', 50);
            $table->float('output_total_nilai_rata_rata_kinerja_kompetensi', 8, 2);
            $table->float('output_total_sementara_kinerja_kompetensi', 8, 2);

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
        Schema::dropIfExists('ikbis_ka_upt');
    }
}
