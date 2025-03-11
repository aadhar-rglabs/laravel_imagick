<?php

namespace Aadhar\LaravelImagick;

use Illuminate\Support\ServiceProvider;

class ImagickServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('imagick', function ($app) {
            return new ImagickService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}