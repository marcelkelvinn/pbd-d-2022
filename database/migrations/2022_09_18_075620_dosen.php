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
        Schema::create('Dosen', function (Blueprint $table) {
            $table->varchar('NIP',25)->primary;
            $table->varchar('Nama',45);
            $table->varchar('No_Telpon',20);
            $table->varchar('Email',45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Dosen');
    }
};
