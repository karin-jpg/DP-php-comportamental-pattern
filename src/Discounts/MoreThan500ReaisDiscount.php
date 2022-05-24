<?php

namespace DesignPattern\Discounts;

use DesignPattern\Budget;
class MoreThan500ReaisDiscount extends Discount
{

  public function calculateDiscounts(Budget $budget): float
  {
    if($budget->value > 500) {
      return $budget->value * 0.05;
    }

    return $this->nextDiscount->calculateDiscounts($budget);
  }

}