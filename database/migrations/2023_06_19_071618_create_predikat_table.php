<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredikatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predikat', function (Blueprint $table) {
            $table->id();
            $table->string('a_poin', 20);
            $table->string('b_poin', 20);
            $table->string('c_poin', 20);
            $table->string('d_poin', 20);
            $table->string('predikat', 20);
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
        Schema::dropIfExists('predikat');
    }
}
