<?php
namespace App\Idw;
use Illuminate\Support\Facades\Facade;
class SiswaFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'siswa';
    }
}