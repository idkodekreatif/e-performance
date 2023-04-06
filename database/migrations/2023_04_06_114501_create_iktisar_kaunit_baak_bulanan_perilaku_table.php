<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIktisarKaunitBaakBulananPerilakuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iktisar_kaunit_baak_bulanan_perilaku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

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

            $table->string('total_poin1', 20)->nullable();
            $table->string('total_poin2', 20)->nullable();
            $table->string('total_poin3', 20)->nullable();
            $table->string('total_poin4', 20)->nullable();
            $table->string('total_poin5', 20)->nullable();
            $table->string('total_bobot', 20)->nullable();
            $table->float('total_poin_kali_bobot', 8, 2)->nullable();
            $table->float('total_nilai_presentase', 8, 2)->nullable();
            $table->date('created_insert');
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
        Schema::dropIfExists('iktisar_kaunit_baak_bulanan_perilaku');
    }
}
