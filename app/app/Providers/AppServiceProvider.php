<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\ApodApi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Library\Services\ApodApi', function ($app) {
            return new ApodApi();
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
