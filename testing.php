<?php

use DesignPattern\TaxCalculator;
use DesignPattern\Budget;
use DesignPattern\Taxes\Icms;
use DesignPattern\Taxes\Iss;

require 'vendor/autoload.php';

$taxCalculator = new TaxCalculator();
$budget = new Budget();

$budget->value = 100;

echo $taxCalculator->calculateTax($budget, new Icms());