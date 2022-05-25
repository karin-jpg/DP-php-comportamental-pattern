<?php

namespace DesignPattern;

use DesignPattern\BudgetState\BudgetState;
use DesignPattern\BudgetState\OnApproval;

class Budget 
{
  public int $itemsQuantity;
  public float $value;
  public BudgetState $currentState;

  public function __construct()
  {
    $this->currentState = new OnApproval();
  }

  public function applyExtraDiscount() 
  {
    $this->valor -= $this->currentState->calculateExtraDiscount($this);
  }

  public function approve() 
  {
    $this->currentState->approve($this);
  }

  public function reprove() 
  {
    $this->currentState->reprove($this);
  }

  public function finalize() 
  {
    $this->currentState->finalize($this);
  }
}