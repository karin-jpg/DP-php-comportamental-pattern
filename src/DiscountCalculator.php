<?php

namespace DesignPattern;

use DesignPattern\Budget;
use DesignPattern\Discounts\MoreThan500ReaisDiscount;
use DesignPattern\Discounts\MoreThan5ItemsDiscount;
use DesignPattern\Discounts\NoDiscount;

class DiscountCalculator 
{

  public function calculateDiscounts(Budget $budget): float
  {
    
    $discountChain = new MoreThan5ItemsDiscount(
      new MoreThan500ReaisDiscount(
        new NoDiscount()
      )
    );

    return $discountChain->calculateDiscounts($budget);
  }
}