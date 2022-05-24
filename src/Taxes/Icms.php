<?php

namespace DesignPattern\Taxes;

use DesignPattern\Budget;

class Icms 
{
  public function calculateTax(Budget $budget) 
  {
    return $budget->value * 0.06;
  }
}