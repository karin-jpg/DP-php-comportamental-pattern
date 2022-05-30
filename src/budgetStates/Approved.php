<?php

namespace DesignPattern\BudgetStates;

use DesignPattern\Budget;

class Approved extends BudgetState
{
  public function calculateExtraDiscount(Budget $budget): float {
    return $budget->valor * 0.02;
  }

  public function finalize(Budget $budget) {
    $budget->currentState = new Finalized();
  }

}