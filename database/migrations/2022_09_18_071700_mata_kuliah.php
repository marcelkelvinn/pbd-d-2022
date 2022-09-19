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
        Schema::create('Mata_Kuliah', function (Blueprint $table) {
            $table->varchar('Kode_MK',10)->primary;
            $table->smallint('SKS');
            $table->varchar('Mata_Kuliah',45);
            
            $table->foreign('Mahasiswa_NIM')->references('NIM')->on('Mahasiswa');
            $table->foreign('Dosen_NIP')->references('NIP')->on('Dosen');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mata_Kuliah');
    }
};
