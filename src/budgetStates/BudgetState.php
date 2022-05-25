<?php

namespace DesignPattern\BudgetState;

use DesignPattern\Budget;

abstract class BudgetState 
{
  /**
   * @throws \DomainException
   */
  abstract public function calculateExtraDiscount(Budget $budget): float;

  public function approve(Budget $budget) {
    throw new \DomainException("This budget cannot be approved");
  }

  public function reprove(Budget $budget) {
    throw new \DomainException("This budget couldn't be reproved");
  }

  public function finalize(Budget $budget) {
    throw new \DomainException("This budget couldn't be finalized");
  }

}