<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatanFungsionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan_fungsional', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('golongan_min')->nullable();
            $table->string('golongan_max')->nullable();
            $table->integer('angka_kredit_min')->default(0);
            $table->integer('angka_kredit_next')->default(0);
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
        Schema::dropIfExists('jabatan_fungsional');
    }
}
