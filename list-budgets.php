<?php


require 'vendor/autoload.php';

use DesignPattern\Budget;
use DesignPattern\BudgetsList;

$budget1 = new Budget();
$budget1->itemsQuantity = 7;
$budget1->approve();
$budget1->value = 1456;

$budget2 = new Budget();
$budget2->itemsQuantity = 3;
$budget2->reprove();
$budget2->value = 150;

$budget3 = new Budget();
$budget3->itemsQuantity = 2;
$budget3->approve();
$budget3->finalize();
$budget3->value = 79;

$budgetsList = [$budget1, $budget2, $budget3];

$budgetsList = new BudgetsList();
$budgetsList->addBudget($budget1);
$budgetsList->addBudget($budget2);
$budgetsList->addBudget($budget3);

foreach ($budgetsList as $budget) {
  echo "Value: ". $budget->value .PHP_EOL;
  echo "State: ". get_class($budget->currentState) .PHP_EOL;
  echo "items quantity: ". $budget->itemsQuantity .PHP_EOL;
  echo PHP_EOL;

}