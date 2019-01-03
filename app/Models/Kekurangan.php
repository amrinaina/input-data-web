<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kekurangan extends Model
{
    protected $table = 'kekurangan';
    protected $fillable = [
    						'id',
							'name'
    					  ];
}
