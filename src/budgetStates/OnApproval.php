<?php

namespace DesignPattern\BudgetState;

use DesignPattern\Budget;

class OnApproval extends BudgetState
{
  public function calculateExtraDiscount(Budget $budget): float {
    return $budget->valor * 0.05;
  }

  public function aprove(Budget $budget)
  {
    $budget->currentState = new Approved();
  }

  public function reprove(Budget $budget)
  {
    $budget->currentState = new Reproved();
  }

}