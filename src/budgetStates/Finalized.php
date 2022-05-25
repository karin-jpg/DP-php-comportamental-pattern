<?php

namespace DesignPattern;

use DesignPattern\Budget;

class Finalized 
{
  public function calculateExtraDiscount(Budget $budget): float {
    throw new \DomainException("A finalized budget cannot get a extra discount");
  }

}