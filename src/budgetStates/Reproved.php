<?php

namespace DesignPattern;

use DesignPattern\Budget;

class Reproved 
{
  public function calculateExtraDiscount(Budget $budget): float {
    throw new \DomainException("A reproved budget cannot get a extra discount");
  }

}