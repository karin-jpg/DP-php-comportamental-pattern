<?php

namespace DesignPattern;

use DomainException;

class Budget 
{
  public int $itemsQuantity;
  public float $value;
  public string $currentState;


  public function applyExtraDiscount() 
  {
    $this->valor -= $this->calculateExtraDiscount();
  }

  public function calculateExtraDiscount(): float 
  {
    if ($this->currentState == "ON_APPROVAL") {
      return $this->valor * 0.05;
    }

    if ($this->currentState == "APPROVED") {
      return $this->valor * 0.02;
    }

    throw new \DomainException("Reproved and finalized budgets cannot receive discounts");
  }
}