<?php

namespace DesignPattern;

use DesignPattern\Budget;

class OnApproval 
{
  public function calculateExtraDiscount(Budget $budget): float {
    return $budget->valor * 0.05;
  }

}