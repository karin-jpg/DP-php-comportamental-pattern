<?php

namespace DesignPattern\Taxes;

use DesignPattern\Budget;
use DesignPattern\Taxes\Tax;

class Icms implements Tax
{
  public function calculateTax(Budget $budget): float
  {
    return $budget->value * 0.06;
  }
}