<?php

namespace DesignPattern\BudgetState;

use DesignPattern\Budget;

abstract class BudgetState 
{
  abstract public function calculateExtraDiscount(Budget $budget): float;

  public function approve() {
    throw new \DomainException("This budget cannot be approved");
  }

  public function reprove() {
    throw new \DomainException("This budget couldn't be reproved");
  }

  public function finalize() {
    throw new \DomainException("This budget couldn't be finalized");
  }

}