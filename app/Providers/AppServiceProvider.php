<?php

namespace App\Providers;

use FacebookPoster;
use Illuminate\Support\ServiceProvider;
use SocialNetworkConnectorInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(SocialNetworkConnectorInterface::class, function ($app) {
        //     return new FacebookPoster();
        // });
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
