<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
    						'id',
							'nomor_telepon_rumah',
							'nomor_hp',
							'email',
							'belongs_to',
							'ekskul'
    					  ];
    public function murid(){
    	return $this->hasMany('App\Models\Murid','id','belongs_to');
    }
}
