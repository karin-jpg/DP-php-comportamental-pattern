<?php

namespace DesignPattern;

class DiscountCalculator 
{

  public function calculateDiscounts(Budget $budget): float
  {
    if($budget->itemsQuantity > 5) {
      return $budget->value * 0.1;
    }

    return 0;
  }

}