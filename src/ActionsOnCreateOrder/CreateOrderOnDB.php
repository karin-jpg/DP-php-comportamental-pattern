<?php

namespace DesignPattern\ActionsOnCreateOrder;

use DesignPattern\Order;

class CreateOrderOnDB
{

  public function executeAction(Order $order): void
  {
    echo "Saving order on DB";
  }

}