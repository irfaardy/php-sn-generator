<?php

namespace Irfa\SerialNumber;

use Illuminate\Support\ServiceProvider;

class SerialNumberGeneratorSeviceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/irfa/' => config_path('irfa')],'php-serial-number');

        
    }
}
