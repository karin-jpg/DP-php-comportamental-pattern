<?php

namespace DesignPattern\BudgetState;

use DesignPattern\Budget;

class Approved 
{
  public function calculateExtraDiscount(Budget $budget): float {
    return $budget->valor * 0.02;
  }

}