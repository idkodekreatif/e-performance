<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIktisarBulananPerilakuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iktisar_bulanan_perilaku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->tinyInteger('q1');
            $table->tinyInteger('q2');
            $table->tinyInteger('q3');
            $table->tinyInteger('q4');
            $table->tinyInteger('q5');

            $table->tinyInteger('total_skor_perilaku');
            $table->decimal('rata_rata_perilaku', 4, 2);
            $table->decimal('total_sementara', 5, 2);

            // poin opsional
            $table->tinyInteger('poin1')->nullable();
            $table->tinyInteger('poin2')->nullable();
            $table->tinyInteger('poin3')->nullable();
            $table->tinyInteger('poin4')->nullable();
            $table->tinyInteger('poin5')->nullable();

            $table->decimal('total_bobot', 5, 2)->nullable();
            $table->decimal('poin_kali_bobot', 6, 3)->nullable();
            $table->decimal('nilai_persentase', 6, 2)->nullable();

            $table->date('created_insert');
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
        Schema::dropIfExists('iktisar_bulanan_perilaku');
    }
}
