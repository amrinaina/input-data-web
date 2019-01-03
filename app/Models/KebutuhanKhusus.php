<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KebutuhanKhusus extends Model
{
    protected $table = 'kebutuhan_khusus';
    protected $fillable = [
    						'id',
							'id_kekurangan',
							'belongs_to',
    					  ];
}
