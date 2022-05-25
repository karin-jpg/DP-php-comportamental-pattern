<?php

namespace DesignPattern\Taxes;

use DesignPattern\Budget;

class Icpp extends TaxWith2Aliquots
{

  protected function mustAplyMaxTax(Budget $budget): bool 
  {
    return $budget->value > 300 && $budget->itemsQuantity > 3;
  }

  protected function calculateMaximumTax(Budget $budget): float 
  {
    return $budget->value * 0.03;
  }

  protected function calculateMinimumTax(Budget $budget): float
  {
    return $budget->value * 0.02;
  }
}