<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuridTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murid', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->enum('jk',['l','p'])->nullable();
            $table->string('nisn')->nullable();
            $table->string('nik')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_register_akta_lahir')->nullable();
            $table->integer('agama')->nullable();
            $table->tinyinteger('kewarganegaraan')->nullable();
            $table->string('nama_negara')->nullable();
            $table->text('alamat_jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('kelurahan_desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kode_pos')->nullable();
            $table->integer('tempat_tinggal')->nullable();
            $table->integer('moda_transportasi')->nullable();
            $table->integer('nomor_kks')->nullable();
            $table->integer('anak_keberapa')->nullable();
            $table->tinyinteger('penerima_kps')->nullable();
            $table->string('nomor_kps')->nullable();
            $table->tinyinteger('usulan_sekolah')->nullable();
            $table->tinyinteger('penerima_kip')->nullable();
            $table->integer('nomor_kip')->nullable();
            $table->string('nama_di_kip')->nullable();
            $table->tinyinteger('terima_fisik_kartu')->nullable();
            $table->integer('alasan_layak')->nullable();
            $table->string('bank')->nullable();
            $table->integer('nomor_rekening')->nullable();
            $table->string('rekening_holder')->nullable();
            $table->string('id_wakil')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('murid');
    }
}
