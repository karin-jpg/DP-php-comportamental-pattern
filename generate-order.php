<?php

require 'vendor/autoload.php';

use DesignPattern\{Budget, GenerateOrder, Order};

$budgetValue = $argv[1];
$itemsQuantity = $argv[2];
$clientName = $argv[3];

$generateOrder = new GenerateOrder($budgetValue, $itemsQuantity, $clientName);
$generateOrder->execute();
var_dump($generateOrder);