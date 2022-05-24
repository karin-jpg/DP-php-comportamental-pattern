<?php

namespace DesignPattern\Taxes;

use DesignPattern\Budget;

class Iss 
{
  public function calculateTax(Budget $budget): float
  {
    return $budget->value * 0.1;
  }
}