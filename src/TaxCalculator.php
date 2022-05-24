<?php

namespace DesignPattern;

class TaxCalculator
{
  public function calculateTax(Budget $budget): float 
  {
    return $budget->value * 0.1;
  }

}