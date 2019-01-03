<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWakilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wakil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('nik')->nullable();
            $table->string('tahun_lahir')->nullable();
            $table->integer('pendidikan')->nullable();
            $table->integer('pekerjaan')->nullable();
            $table->integer('penghasilan_bulanan')->nullable();
            $table->integer('type')->nullable();
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
        Schema::dropIfExists('wakil');
    }
}
