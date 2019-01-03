<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrasiMurid extends Model
{
   protected $table = 'registrasi_murid';
    protected $fillable = [
    						'id',
							'jurusan',
							'jenis',
							'nis',
							'tanggal_masuk',
							'asal_sekolah',
							'no_peserta_ujian',
							'nomor_seri_ijazah',
							'nomor_seri_skhus'
    					  ];
}
