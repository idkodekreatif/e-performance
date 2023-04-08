<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaunitYpsdmitBulananKompetensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaunit_ypsdmit_bulanan_kompetensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_staff_perilaku')->constrained('kaunit_ypsdmit_bulanan_perilaku')->onDelete('cascade');

            $table->string('jenis_pekerjaan')->nullable();
            $table->enum('question', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('nilai_bobot', 20)->nullable();
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
        Schema::dropIfExists('kaunit_ypsdmit_bulanan_kompetensi');
    }
}
