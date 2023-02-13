<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffBaakSatuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_baak_satu', function (Blueprint $table) {
            $table->id();
            $table->enum('Point1_1', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point1_2', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point1_3', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point1_4', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point1_5', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point2_1', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point2_2', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point2_3', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point2_4', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point2_5', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point3_1', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point3_2', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point3_3', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point3_4', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point3_5', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point4_1', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point4_2', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point4_3', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point4_4', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point4_5', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point5_1', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point5_2', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point5_3', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point5_4', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point5_5', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point6_1', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point6_2', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point6_3', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point6_4', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('Point6_5', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('output_point_1', 50);
            $table->string('output_point_2', 50);
            $table->string('output_point_3', 50);
            $table->string('output_point_4', 50);
            $table->string('output_point_5', 50);
            $table->string('output_total_point_kinerja_perilaku', 50);
            $table->float('output_total_nilai_rata_rata_kinerja_perilaku', 8, 2);
            $table->float('output_total_sementara_kinerja_perilaku', 8, 2);

            $table->enum('kinerja_kompetensi_1', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_1')->nullable();
            $table->enum('kinerja_kompetensi_2', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_2')->nullable();
            $table->enum('kinerja_kompetensi_3', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_3')->nullable();
            $table->enum('kinerja_kompetensi_4', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_4')->nullable();
            $table->enum('kinerja_kompetensi_5', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_5')->nullable();
            $table->enum('kinerja_kompetensi_6', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_6')->nullable();
            $table->enum('kinerja_kompetensi_7', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_7')->nullable();
            $table->enum('kinerja_kompetensi_8', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_8')->nullable();
            $table->enum('kinerja_kompetensi_9', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_9')->nullable();
            $table->enum('kinerja_kompetensi_10', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_10')->nullable();
            $table->enum('kinerja_kompetensi_11', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_11')->nullable();
            $table->enum('kinerja_kompetensi_12', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_12')->nullable();
            $table->enum('kinerja_kompetensi_13', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_13')->nullable();
            $table->enum('kinerja_kompetensi_14', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_14')->nullable();
            $table->enum('kinerja_kompetensi_15', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_15')->nullable();
            $table->enum('kinerja_kompetensi_16', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_16')->nullable();
            $table->enum('kinerja_kompetensi_17', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_17')->nullable();
            $table->enum('kinerja_kompetensi_18', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_18')->nullable();
            $table->enum('kinerja_kompetensi_19', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_19')->nullable();
            $table->enum('kinerja_kompetensi_20', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_20')->nullable();
            $table->enum('kinerja_kompetensi_21', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_21')->nullable();
            $table->enum('kinerja_kompetensi_22', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_22')->nullable();
            $table->enum('kinerja_kompetensi_23', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_23')->nullable();
            $table->enum('kinerja_kompetensi_24', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_24')->nullable();
            $table->enum('kinerja_kompetensi_25', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_25')->nullable();
            $table->enum('kinerja_kompetensi_26', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_26')->nullable();
            $table->enum('kinerja_kompetensi_27', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_27')->nullable();
            $table->enum('kinerja_kompetensi_28', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_28')->nullable();
            $table->enum('kinerja_kompetensi_29', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_29')->nullable();
            $table->enum('kinerja_kompetensi_30', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_30')->nullable();
            $table->enum('kinerja_kompetensi_31', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_31')->nullable();
            $table->enum('kinerja_kompetensi_32', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_32')->nullable();
            $table->enum('kinerja_kompetensi_33', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_33')->nullable();
            $table->enum('kinerja_kompetensi_34', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_34')->nullable();
            $table->enum('kinerja_kompetensi_35', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_35')->nullable();
            $table->enum('kinerja_kompetensi_36', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_36')->nullable();
            $table->enum('kinerja_kompetensi_37', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_37')->nullable();
            $table->enum('kinerja_kompetensi_38', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_38')->nullable();
            $table->enum('kinerja_kompetensi_39', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_39')->nullable();
            $table->enum('kinerja_kompetensi_40', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_40')->nullable();
            $table->enum('kinerja_kompetensi_41', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_41')->nullable();
            $table->enum('kinerja_kompetensi_42', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_42')->nullable();
            $table->enum('kinerja_kompetensi_43', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_43')->nullable();
            $table->enum('kinerja_kompetensi_44', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_44')->nullable();
            $table->enum('kinerja_kompetensi_45', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_45')->nullable();
            $table->enum('kinerja_kompetensi_46', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_46')->nullable();
            $table->enum('kinerja_kompetensi_47', ['1', '2', '3', '4', '5'])->nullable();
            $table->string('file_kinerja_kompetensi_47')->nullable();
            $table->string('output_point_kinerja_kompetensi_1', 50);
            $table->string('output_point_kinerja_kompetensi_2', 50);
            $table->string('output_point_kinerja_kompetensi_3', 50);
            $table->string('output_point_kinerja_kompetensi_4', 50);
            $table->string('output_point_kinerja_kompetensi_5', 50);
            $table->string('output_total_point_kinerja_kompetensi', 50);
            $table->float('output_total_nilai_rata_rata_kinerja_kompetensi', 8, 2);
            $table->float('output_total_sementara_kinerja_kompetensi', 8, 2);

            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('staff_baak_satu');
    }
}
