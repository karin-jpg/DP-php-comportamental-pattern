<?php

namespace DesignPattern\Taxes;

use DesignPattern\Budget;
use DesignPattern\Taxes\Tax;

abstract class TaxWith2Aliquots implements Tax
{

  public function calculateTax(Budget $budget): float
  {
    if ($this->mustAplyMaxTax($budget)) {
      return $this->calculateMaximumTax($budget);
    }

    return $this->calculateMinimumTax($budget);
  }

 abstract protected function mustAplyMaxTax(Budget $budget): bool;
 abstract protected function calculateMaximumTax(Budget $budget): float;
 abstract protected function calculateMinimumTax(Budget $budget): float;

}