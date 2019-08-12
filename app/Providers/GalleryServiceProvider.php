<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class GalleryServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Repositories\Gallery\GalleryContract',
            'App\Repositories\Gallery\EloquentGalleryRepository');
    }
}
