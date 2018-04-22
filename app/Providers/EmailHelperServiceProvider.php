<?php

namespace App\Providers;

use App\Helpers\EmailHelper;
use Illuminate\Support\ServiceProvider;

class EmailHelperServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Helpers\EmailHelper', function ($app) {
            return new EmailHelper('testttt.jpg');
        });
    }
}
