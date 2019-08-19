<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class HomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
     
    public function boot()
    {
        //
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
     
    public function register()
    {
        $this->app->bind('App\Repositories\Home\HomeContract',
            'App\Repositories\Home\EloquentHomeRepository');
    }
}
