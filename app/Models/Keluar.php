<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    protected $table = 'keluar';
    protected $fillable = [
    						'id',
							'alasan',
							'tanggal',
							'detail_alasan',
							'id_murid'
    					  ];
    public function murid(){
    	return $this->belongsTo('App\Models\Murid','id','id_murid');
    }
}
