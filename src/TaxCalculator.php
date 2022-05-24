<?php

namespace DesignPattern;
use DesignPattern\Taxes\Tax;

class TaxCalculator
{
  public function calculateTax(Budget $budget, Tax $tax): float 
  {
    return $tax->calculateTax($budget);
  }

}