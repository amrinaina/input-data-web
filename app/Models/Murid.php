<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    protected $table = 'murid';
    protected $fillable = [
							'name','jk','nisn','nik','tempat_lahir','tanggal_lahir','no_register_akta_lahir','agama','kewarganegaraan','nama_negara','alamat_jalan','rt','rw','nama_dusun','kelurahan_desa','kecamatan','kode_pos','tempat_tinggal','moda_transportasi','nomor_kks','anak_keberapa','penerima_kps','nomor_kps','usulan_sekolah','penerima_kip','nomor_kip','nama_di_kip','terima_fisik_kartu','alasan_layak','bank','nomor_rekening','rekening_holder','id_wakil','status'
    					  ];

	public function ag()
	{
		return $this->hasOne('App\Models\Agama','id','agama');
	}

	public function murid(){
    	return $this->hasMany('App\Models\Wakil','id','id_murid');
    }

}