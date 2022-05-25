<?php

namespace DesignPattern\Taxes;

use DesignPattern\Budget;

class Ikcv extends TaxWith2Aliquots
{

  public function mustAplyMaxTax(Budget $budget): bool 
  {
    return $budget->value > 300 && $budget->itemsQuantity > 3;
  }

  public function calculateMaximumTax(Budget $budget): float 
  {
    return $budget->value * 0.04;
  }

  public function calculateMinimumTax(Budget $budget): float
  {
    return $budget->value * 0.025;
  }
}