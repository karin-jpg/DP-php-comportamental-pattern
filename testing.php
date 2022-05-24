<?php

use DesignPattern\TaxCalculator;
use DesignPattern\Budget;

require 'vendor/autoload.php';

$taxCalculator = new TaxCalculator();
$budget = new Budget();

$budget->value = 100;

echo $taxCalculator->calculateTax($budget);