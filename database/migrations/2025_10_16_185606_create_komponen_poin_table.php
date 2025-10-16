<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomponenPoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponen_poin', function (Blueprint $table) {
            $table->id();
            $table->string('nama_komponen');
            $table->decimal('Non-JAD', 5, 2)->nullable();
            $table->decimal('AA', 5, 2)->nullable();
            $table->decimal('Lektor', 5, 2)->nullable();
            $table->decimal('LK', 5, 2)->nullable();
            $table->decimal('GB', 5, 2)->nullable();
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
        Schema::dropIfExists('komponen_poin');
    }
}
