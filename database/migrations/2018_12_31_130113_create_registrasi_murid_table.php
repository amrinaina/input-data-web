<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrasiMuridTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_murid', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_murid')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('jenis')->nullable();
            $table->integer('nis')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('no_peserta_ujian')->nullable();
            $table->string('nomor_seri_ijazah')->nullable();
            $table->string('nomor_seri_skhus')->nullable();
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
        Schema::dropIfExists('registrasi_murid');
    }
}
