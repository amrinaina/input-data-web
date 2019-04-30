<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wakil extends Model
{
   	protected $table = 'wakil';
    protected $fillable = [
    						'id',
    						'id_murid',
							'family_name',
							'nik',
							'tahun_lahir',
							'pendidikan',
							'pekerjaan',
							'penghasilan_bulanan',
							'type'
    					  ];
}
