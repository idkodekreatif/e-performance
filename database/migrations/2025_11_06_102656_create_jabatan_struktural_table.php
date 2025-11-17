<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatanStrukturalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan_struktural', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // contoh: Kepala Prodi, Sekretaris, Staf TU
            $table->string('level')->nullable(); // Universitas / Fakultas / Prodi / Unit
            $table->foreignId('unit_kerja_id')->nullable()->constrained('unit_kerja')->onDelete('cascade');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('jabatan_struktural');
    }
}
