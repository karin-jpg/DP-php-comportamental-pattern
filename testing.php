<?php

//Strategy implementation
use DesignPattern\TaxCalculator;
use DesignPattern\Budget;
use DesignPattern\Taxes\Icms;
use DesignPattern\Taxes\Iss;

//Chain of responsability implementation
use DesignPattern\DiscountCalculator;
use DesignPattern\Taxes\Icpp;
use DesignPattern\Taxes\Ikcv;

require 'vendor/autoload.php';

/* Tax calculator testing - Strategy implementation
$taxCalculator = new TaxCalculator();
$budget = new Budget();

$budget->value = 100;

echo $taxCalculator->calculateTax($budget, new Icms());
*/

/* Discount calculator testing - Chain of responsability implementation
// $budget = new Budget();
// $budget->value = 600;
// $budget->itemsQuantity = 5;

// $discountCalculator = new DiscountCalculator();
// echo $discountCalculator->calculateDiscounts($budget);
*/


/* New Tax with 2 aliquots testing - Template method implementation
// $budget = new Budget();
// $budget->value = 700;
// $budget->itemsQuantity = 2;

//Ex 1
// $taxWith2AliquotsCalculator = new Icpp();

//Ex 2
// $taxWith2AliquotsCalculator = new Ikcv();
// echo $taxWith2AliquotsCalculator->calculateTax($budget);
*/