<?php

namespace DesignPattern\BudgetState;

use DesignPattern\Budget;

class Reproved 
{
  public function calculateExtraDiscount(Budget $budget): float {
    throw new \DomainException("A reproved budget cannot get a extra discount");
  }

}