<?php

namespace DesignPattern\ActionsOnCreateOrder;


use DesignPattern\Order;

class CreateOrderLog implements ActionAfterCreatingOrder
{
  public function executeAction(Order $order): void
  {
    echo "Creating Log for order".PHP_EOL;
  }

}