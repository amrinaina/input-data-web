<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wakil extends Model
{
   protected $table = 'wakil';
    protected $fillable = [
    						'id',
							'name',
							'nik',
							'tahun_lahir',
							'pendidikan',
							'pekerjaan',
							'penghasilan_bulanan',
							'type'
    					  ];
}
