<?php

namespace DesignPattern\Taxes;

use DesignPattern\Budget;

interface Tax
{
  public function calculateTax(Budget $budget): float;

}