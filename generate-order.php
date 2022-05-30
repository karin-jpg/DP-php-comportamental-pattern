<?php

require 'vendor/autoload.php';

use DesignPattern\{Budget, Order};

$budgetValue = $argv[1];
$itemsQuantity = $argv[2];
$clientName = $argv[3];

$budget = new Budget();
$budget->value = $budgetValue;
$budget->itemsQuantity = $itemsQuantity;

$order = new Order();
$order->completionDate = new \DateTimeImmutable();
$order->clientName = $clientName;
$order->budget = $budget;

var_dump($order);