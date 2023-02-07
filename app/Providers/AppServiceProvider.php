<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // change public folder for kualo server conf.
//        $this->app->bind('path.public', function() {
//            return realpath(base_path().'/../public_html');
//        });
        $this->app->bind('path.public', function() {
            return base_path().'/public_html';
        });
    }
}
