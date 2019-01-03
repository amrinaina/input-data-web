<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class SiswaFacadeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind("siswa", function()
        {
            return new \App\Idw\SiswaClassFacade;
        });
    
        //
    }
}
