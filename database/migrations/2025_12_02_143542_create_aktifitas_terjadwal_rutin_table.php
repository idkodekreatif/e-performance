<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktifitasTerjadwalRutinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktifitas_terjadwal_rutin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rutin')
                ->constrained('iktisar_staff_bulanan_perilaku')
                ->cascadeOnDelete();

            $table->string('jenis_pekerjaan'); // kompetensi
            $table->tinyInteger('question');   // 1–5
            $table->decimal('nilai_bobot', 5, 2); // %
            $table->decimal('nilai_final', 6, 3); // (question × bobot) / 5

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
        Schema::dropIfExists('aktifitas_terjadwal_rutin');
    }
}
