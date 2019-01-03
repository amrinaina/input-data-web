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
}
