<?php


namespace Cblink\LaravelException;


use Illuminate\Support\ServiceProvider;

class ExceptionsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            \dirname(__DIR__) . '/config/exceptions.php' => config_path('exceptions.php'),
        ], 'config');
    }

}