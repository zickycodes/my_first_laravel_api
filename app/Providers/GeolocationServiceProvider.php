<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Geolocation\Geolocation;
use App\Services\Map\Map;
use App\Services\Satellite\Satellite;

class GeolocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
        // $this->app->bind(Geolocation::class, function ($app) {
        //     $map = new Map();
        //     $satellite = new Satellite();
    
        //     return new Geolocation($map, $satellite);
        // });


        $this->app->bind(Geolocation::class, function($app){
            $map = new Map();
            $satellite = new Satellite();

            return new Geolocation($map, $satellite);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
