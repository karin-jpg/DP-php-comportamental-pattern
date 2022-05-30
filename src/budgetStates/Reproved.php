<?php

namespace DesignPattern\BudgetStates;

use DesignPattern\Budget;

class Reproved extends BudgetState
{
  public function calculateExtraDiscount(Budget $budget): float {
    throw new \DomainException("A reproved budget cannot get a extra discount");
  }

  public function finalize(Budget $budget) {
    $budget->currentState = new Finalized();
  }

}