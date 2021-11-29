<?php

namespace App\Domain\BehaviouralPatterens\StratgeyPatteren\CarCoupons;

use carCouponGenerator;
use Illuminate\Support\ServiceProvider;

class CarCouponsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(carCouponGenerator::class, couponGeneratorContext::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
