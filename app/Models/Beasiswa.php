<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $table = 'beasiswa';
    protected $fillable = [
    						'id',
							'id_murid',
							'jenis',
							'keterangan',
							'val_empty_code',
							'tahun_mulai',
							'tahun_selesai'
    					  ];
}
