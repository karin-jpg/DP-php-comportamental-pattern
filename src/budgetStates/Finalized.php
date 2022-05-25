<?php

namespace DesignPattern\BudgetState;

use DesignPattern\Budget;

class Finalized extends BudgetState
{
  public function calculateExtraDiscount(Budget $budget): float {
    throw new \DomainException("A finalized budget cannot get a extra discount");
  }

}