<?php

namespace App\Http\Controllers;

use App\Domain\BehaviouralPatterens\StratgeyPatteren\CarCoupons\couponGeneratorContext;
use App\Domain\BehaviouralPatterens\StratgeyPatteren\CarCoupons\Strategies\bmwCouponGenerator;
use App\Domain\BehaviouralPatterens\StratgeyPatteren\CarCoupons\Strategies\mercedesCouponGenerator;
// use couponGeneratorContext;
use Illuminate\Http\Request;

class CarCouponController extends Controller
{

    public function addCarCoupon(Request $request): string
    {
        $carType = $request->all();
        $context = null;
        if ($carType['type'] == "bmw") $context = new couponGeneratorContext(new  bmwCouponGenerator());
        if ($carType['type']  == "mercedes") $context = new couponGeneratorContext(new  mercedesCouponGenerator());
        return $context ? $context->getCoupon() : "no car type";
    }
}
