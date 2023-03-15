<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFileToWarek2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warek_2', function (Blueprint $table) {
            $table->string('kinerja_kompetensi_7')->after('file_kinerja_kompetensi_6')->nullable();
            $table->string('file_kinerja_kompetensi_7')->after('kinerja_kompetensi_7')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('warek_2', function (Blueprint $table) {
            $table->dropColumn('kinerja_kompetensi_7');
            $table->dropColumn('file_kinerja_kompetensi_7');
        });
    }
}
