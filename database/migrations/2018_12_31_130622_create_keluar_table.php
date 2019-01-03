<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alasan')->nullable();
            $table->datetime('tanggal')->nullable();
            $table->text('detail_alasan')->nullable();
            $table->integer('id_murid')->nullable();
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
        Schema::dropIfExists('keluar');
    }
}
