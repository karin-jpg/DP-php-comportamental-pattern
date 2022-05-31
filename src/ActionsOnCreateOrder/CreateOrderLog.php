<?php

namespace DesignPattern\ActionsOnCreateOrder;

use DesignPattern\Order;

class CreateOrderLog
{
  public function executeAction(Order $order): void
  {
    echo "Creating Log for order";
  }

}