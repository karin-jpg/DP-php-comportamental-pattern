<?php

namespace DesignPattern;

use DesignPattern\Budget;
use Traversable;

class BudgetsList implements \IteratorAggregate
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

  public function getIterator(): Traversable
  {
    return new \ArrayIterator($this->budgets);
  }

}