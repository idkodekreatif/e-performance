<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserJabatanFungsionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_jabatan_fungsional', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('jabatan_fungsional_id')->constrained('jabatan_fungsional')->onDelete('cascade');
            $table->foreignId('unit_kerja_id')->constrained('unit_kerja')->onDelete('cascade');

            $table->date('tmt_mulai');
            $table->date('tmt_selesai')->nullable();
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
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
        Schema::dropIfExists('user_jabatan_fungsional');
    }
}
