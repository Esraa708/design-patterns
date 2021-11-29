<?php

namespace App\Domain\BehaviouralPatterens\StratgeyPatteren\CarCoupons\Strategies;

use App\Domain\BehaviouralPatterens\StratgeyPatteren\CarCoupons\carCouponGenerator;

class bmwCouponGenerator implements carCouponGenerator
{
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;

    public function addSeasonDiscount(): int
    {
        if (!$this->isHighSeason) return $this->discount += 5;

        return $this->discount += 0;
    }

    public function addStockDiscount(): int
    {
        if ($this->bigStock) return $this->discount += 7;

        return $this->discount += 0;
    }
}
