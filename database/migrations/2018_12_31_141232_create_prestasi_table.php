<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_murid')->nullable();
            $table->integer('jenis')->nullable();
            $table->integer('tingkat')->nullable();
            $table->string('nama')->nullable();
            $table->string('tahun')->nullable();
            $table->string('penyelenggara')->nullable();
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
        Schema::dropIfExists('prestasi');
    }
}
