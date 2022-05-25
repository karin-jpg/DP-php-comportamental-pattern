<?php

namespace DesignPattern\BudgetState;

use DesignPattern\Budget;

abstract class BudgetState 
{
  abstract protected function calculateExtraDiscount(Budget $budget): float;

  public function approve(): float {
    throw new \DomainException("This budget cannot be approved");
  }

  public function reprove(): float {
    throw new \DomainException("This budget couldn't be reproved");
  }

  public function finalize(): float {
    throw new \DomainException("This budget couldn't be finalized");
  }

}