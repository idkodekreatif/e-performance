<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_menu', function (Blueprint $table) {
            $table->id();
            $table->enum('control_menu', ['0', '1'])->default('1')->comment('0: menu edit point disable ( FALSE ); 1: menu edit point aktif ( TRUE )');
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
        Schema::dropIfExists('control_menu');
    }
}
