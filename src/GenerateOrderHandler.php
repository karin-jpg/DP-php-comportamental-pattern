<?php

namespace DesignPattern;


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


    echo "Creat order on DB". PHP_EOL;
    echo "Creat email to client". PHP_EOL;
    echo "Creat log". PHP_EOL;

    echo "order created!". PHP_EOL;
  }

}