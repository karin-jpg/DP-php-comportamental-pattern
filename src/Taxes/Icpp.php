<?php

namespace DesignPattern\Taxes;

use DesignPattern\Budget;
use DesignPattern\Taxes\Tax;

class Icpp implements Tax
{
  public function calculateTax(Budget $budget): float
  {
    if ($budget->value > 300) {
      return $budget->value * 0.03;
    }

      return $budget->value * 0.02;
  }
}