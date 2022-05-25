<?php

namespace DesignPattern\Taxes;

use DesignPattern\Budget;
use DesignPattern\Taxes\Tax;

class Ikcv implements Tax
{
  public function calculateTax(Budget $budget): float
  {
    if ($this->mustAplyMaxTax($budget)) {
      return $this->calculateMaximumTax($budget);
    }

    return $this->calculateMinimumTax($budget);
  }

  private function mustAplyMaxTax(Budget $budget): bool 
  {
    return $budget->value > 300 && $budget->itemsQuantity > 3;
  }

  private function calculateMaximumTax(Budget $budget): float 
  {
    return $budget->value * 0.04;
  }

  private function calculateMinimumTax(Budget $budget): float
  {
    return $budget->value * 0.025;
  }
}