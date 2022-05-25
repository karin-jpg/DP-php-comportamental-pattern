<?php

namespace DesignPattern\Taxes;

use DesignPattern\Budget;
use DesignPattern\Taxes\Tax;

class Ikcv implements Tax
{
  public function calculateTax(Budget $budget): float
  {
    if ($budget->value > 300 && $budget->itemsQuantity > 3) {
      return $budget->value * 0.04;
    }

      return $budget->value * 0.025;
  }
  
}