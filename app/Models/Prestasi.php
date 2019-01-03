<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasi';
    protected $fillable = [
    						'id',
							'id_murid',
							'jenis',
							'tingkat',
							'nama',
							'tahun',
							'penyelenggara'
    					  ];
}
