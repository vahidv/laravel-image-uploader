<?php

namespace App\Providers;

use App\Helpers\ImageHelper;
use Illuminate\Support\ServiceProvider;

class ImageUploadServiceProvider extends ServiceProvider
{
//    protected $defer = true;

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
        $this->app->bind('ImageHelper', function ($app) {
            return new ImageHelper();
        });
    }
}
