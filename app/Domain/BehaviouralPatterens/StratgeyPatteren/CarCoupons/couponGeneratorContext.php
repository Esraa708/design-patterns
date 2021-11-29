<?php

namespace App\Domain\BehaviouralPatterens\StratgeyPatteren\CarCoupons;

class couponGeneratorContext
{
    public   $carCoupon;
    public function __construct(carCouponGenerator $carCoupon)
    {
        $this->carCoupon = $carCoupon;
    }

    // Use the object's methods to generate the coupon. 
    public function getCoupon(): string
    {
        $discount = $this->carCoupon->addSeasonDiscount();
        $discount = $this->carCoupon->addStockDiscount();
        return $coupon = "Get {$discount}% off the price of your new car.";
    }
}
