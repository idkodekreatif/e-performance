<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenyesuaianTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('about_me')->nullable()->after('prodi');
            $table->string('avatar')->nullable()->after('about_me');
            $table->enum('status', [
                "ACTIVE",
                "INACTIVE"
            ])->nullable()->after('avatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("about_me");
            $table->dropColumn("avatar");
            $table->dropColumn("status");
        });
    }
}
