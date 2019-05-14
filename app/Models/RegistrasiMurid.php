<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrasiMurid extends Model
{
   	protected $table = 'registrasi_murid';
    protected $fillable = [
    						'id',
    						'id_murid',
							'jurusan',
							'jenis',
							'nis',
							'tanggal_masuk',
							'asal_sekolah',
							'no_peserta_ujian',
							'nomor_seri_ijazah',
							'nomor_seri_skhus'
    					  ];
    public function murid(){
    	return $this->hasMany('App\Models\Murid','id','id_murid');
    }
    public function siswa(){
        return $this->hasOne('App\Models\Murid','id','id_murid');
    }
    public function jur(){
    	return $this->hasOne('App\Models\Jurusan','id','jurusan');
    }
}
