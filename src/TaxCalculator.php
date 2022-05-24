<?php

namespace DesignPattern;

class TaxCalculator
{
  public function calculate(Budget $budget): float 
  {
    return $budget->value * 0.1;
  }

}