<?php

namespace DesignPattern\Discounts;

use DesignPattern\Budget;

class MoreThan5ItemsDiscount extends Discount
{

  public function calculateDiscounts(Budget $budget): float
  {
    if($budget->itemsQuantity > 5) {
      return $budget->value * 0.1;
    }

    return $this->nextDiscount->calculateDiscounts($budget);
  }

}