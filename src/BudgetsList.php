<?php

namespace DesignPattern\Command;

use DesignPattern\Budget;

class Commandd
{
  private array $budgets;

  public function __construct()
  {
    $this->budget = array();
  }

  public function addBudget(Budget $budget): void
  {
    $this->budgets[] = $budget;
  }

  public function budgets(): array
  {
    return $this->budgets;
  }

}