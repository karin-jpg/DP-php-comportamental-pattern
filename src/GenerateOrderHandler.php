<?php

namespace DesignPattern;

use DesignPattern\ActionsOnCreateOrder\CreateOrderLog;
use DesignPattern\ActionsOnCreateOrder\CreateOrderOnDB;
use DesignPattern\ActionsOnCreateOrder\SendOrderByEmail;

class GenerateOrderHandler
{
  public function __construct()
  {
  
  }

  public function execute(GenerateOrder $generateOrder)
  {
    $budget = new Budget();
    $budget->value = $generateOrder->getBudgetValue();
    $budget->itemsQuantity = $generateOrder->getitemsQuantity();
    
    $order = new Order();
    $order->completionDate = new \DateTimeImmutable();
    $order->clientName = $generateOrder->getClientName();
    $order->budget = $budget;



    $orderBD = new CreateOrderOnDB();
    $orderEmail = new SendOrderByEmail();
    $orderLog = new CreateOrderLog();

    $orderBD->executeAction($order);
    $orderEmail->executeAction($order);
    $orderLog->executeAction($order);

    echo "order created!". PHP_EOL;
  }

}