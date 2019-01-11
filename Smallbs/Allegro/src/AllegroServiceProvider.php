<?php
namespace Smallbs\Allegro;

use Illuminate\Support\ServiceProvider;

class AllegroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
 /*       $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'allegro');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/Smallbs/Allegro'),
        ]);*/
    }
/*
    /**
     * Register the application services.
     *
     * @return void
    
    public function register()
    {
        $this->app->make('Smallbs\Allegro\AllegroApiController');
    }
*/
    /**
    * Register any package services.
    *
    * @return void
    */
   public function register()
   {
       $this->mergeConfigFrom(__DIR__.'/../config/Allegro.php', 'Allegro');

       // Register the service the package provides.
       $this->app->singleton('Allegro', function ($app) {
           return new allegro;
       });
   }
}