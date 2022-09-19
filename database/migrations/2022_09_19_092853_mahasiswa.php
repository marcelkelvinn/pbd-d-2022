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
        Schema::create('Mahasiswa', function (Blueprint $table) {
            $table->varchar('NIM',15)->primary;
            $table->varchar('Nama',45);
            $table->smallint('Angkatan');
            $table->varchar('Email',45);

            $table->foreign('Program_Studi_ID_Program_Studi')->references('ID_Program_Studi')->on('Program_Studi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mahasiswa');
    }
};
