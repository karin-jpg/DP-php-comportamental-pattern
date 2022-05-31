<?php

require 'vendor/autoload.php';

use DesignPattern\{Budget, GenerateOrder, GenerateOrderHandler, Order};
use DesignPattern\ActionsOnCreateOrder\CreateOrderLog;
use DesignPattern\ActionsOnCreateOrder\CreateOrderOnDB;

$budgetValue = $argv[1];
$itemsQuantity = $argv[2];
$clientName = $argv[3];

$generateOrder = new GenerateOrder($budgetValue, $itemsQuantity, $clientName);
$generateOrderHandler = new GenerateOrderHandler();
$generateOrderHandler->AddActionAfterCreatingOrder(new CreateOrderOnDB);
$generateOrderHandler->AddActionAfterCreatingOrder(new CreateOrderLog);
$generateOrderHandler->execute($generateOrder);