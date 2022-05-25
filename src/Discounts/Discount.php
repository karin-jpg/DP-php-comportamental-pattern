<?php

namespace DesignPattern\Discounts;
use DesignPattern\Budget;

abstract class Discount
{

  protected ?Discount $nextDiscount;

  public function __construct(?Discount $nextDiscount)
  {
    $this->$nextDiscount = $nextDiscount;
  }

  abstract public function calculateDiscounts(Budget $budget): float;

}