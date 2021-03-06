<?php

namespace DesignPattern\Discounts;

use DesignPattern\Budget;

class NoDiscount extends Discount
{

  public function __construct()
  {
    parent::__construct(null);
  }

  public function calculateDiscounts(Budget $budget): float
  {
    return 0;
  }

}