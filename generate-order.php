<?php

require 'vendor/autoload.php';

use DesignPattern\{Budget, GenerateOrder, GenerateOrderHandler, Order};

$budgetValue = $argv[1];
$itemsQuantity = $argv[2];
$clientName = $argv[3];

$generateOrder = new GenerateOrder($budgetValue, $itemsQuantity, $clientName);
$generateOrderHandler = new GenerateOrderHandler();
$generateOrderHandler->execute($generateOrder);