<?php

namespace DesignPattern;

use DesignPattern\ActionsOnCreateOrder\ActionAfterCreatingOrder;
use DesignPattern\ActionsOnCreateOrder\CreateOrderLog;
use DesignPattern\ActionsOnCreateOrder\CreateOrderOnDB;
use DesignPattern\ActionsOnCreateOrder\SendOrderByEmail;

class GenerateOrderHandler
{

  private array $actionsAfterCreatingOrder = array();
  public function __construct()
  {
  
  }


  public function AddActionAfterCreatingOrder(ActionAfterCreatingOrder $action)
  {
    $this->actionsAfterCreatingOrder[] = $action;
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

    foreach($this->actionsAfterCreatingOrder as $action) {
      $action->executeAction($order);
    }
    

    echo "order created!". PHP_EOL;  
  }

}