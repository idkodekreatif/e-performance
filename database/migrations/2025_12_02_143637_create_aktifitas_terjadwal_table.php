<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktifitasTerjadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktifitas_terjadwal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_terjadwal')
                ->constrained('iktisar_bulanan_perilaku')
                ->cascadeOnDelete();

            $table->decimal('poin_aktifitas', 5, 2);
            $table->tinyInteger('realisasi'); // 1–5
            $table->decimal('nilai', 6, 2);
            $table->decimal('poin_aktifitas_nilai', 6, 3);
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
        Schema::dropIfExists('aktifitas_terjadwal');
    }
}
