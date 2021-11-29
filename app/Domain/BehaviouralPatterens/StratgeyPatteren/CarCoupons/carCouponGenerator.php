<?php
namespace App\Domain\BehaviouralPatterens\StratgeyPatteren\CarCoupons;
interface carCouponGenerator
{
    public function addSeasonDiscount(): int;
    public function addStockDiscount(): int;
}
