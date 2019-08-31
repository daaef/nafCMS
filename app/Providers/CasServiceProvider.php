<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class CasServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Repositories\Cas\CasContract',
            'App\Repositories\Cas\EloquentCasRepository');
    }
}
