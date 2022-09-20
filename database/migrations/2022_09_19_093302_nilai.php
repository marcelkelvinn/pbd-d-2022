<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Nilai', function (Blueprint $table) {
            $table->smallint('Kode_Nilai')->primary;
            $table->smallint('Nilai_Tugas');
            $table->smallint('Nilai_Kuis');
            $table->smallint('Nilai_UTS');
            $table->smallint('Nilai_UAS');
            $table->smallint('Nilai_Keaktifan');

            $table->foreign('Dosen_NIP')->references('NIP')->on('Dosen');
            $table->foreign('Mahasiswa_NIM')->references('NIM')->on('Mahasiswa');
            $table->foreign('Mata_Kuliah_Kode_MK')->references('Kode_MK')->on('Mata_Kuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Nilai');
    }
};
