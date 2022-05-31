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

  public function getFinalizedBudgets(): Traversable
  {
    return new \ArrayIterator(array_filter($this->budgets, fn (Budget $budget) => $budget->currentState instanceof \DesignPattern\BudgetStates\Finalized));  }

}