<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailMurid extends Model
{
    protected $table = 'detail_murid';
    protected $fillable = [
    						'id',
							'id_murid',
							'tinggi_badan',
							'berat_badan',
							'jarak_sekolah',
							'waktu_tempuh',
							'jumlah_saudara_kandung'
    					  ];
}
