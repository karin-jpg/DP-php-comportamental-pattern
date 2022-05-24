<?php

//Strategy implementation
use DesignPattern\TaxCalculator;
use DesignPattern\Budget;
use DesignPattern\Taxes\Icms;
use DesignPattern\Taxes\Iss;

//Chain of responsability implementation
use DesignPattern\DiscountCalculator;

require 'vendor/autoload.php';

/* Tax calculator testing - Strategy implementation
$taxCalculator = new TaxCalculator();
$budget = new Budget();

$budget->value = 100;

echo $taxCalculator->calculateTax($budget, new Icms());
*/


$budget = new Budget();
$budget->value = 600;
$budget->itemsQuantity = 5;

$discountCalculator = new DiscountCalculator();
echo $discountCalculator->calculateDiscounts($budget);