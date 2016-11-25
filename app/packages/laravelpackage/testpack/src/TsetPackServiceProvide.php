<?php

namespace Laravelpackage\Testpack;

use Illuminate\Support\ServiceProvider;

class TsetPackServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__.'/views','testpack');
        $this->publishes([__DIR__.'/views'=>base_path('resources/views/laravelpackage/testpack'),]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Laravelpackage\Testpack\UserController');
    }
}
