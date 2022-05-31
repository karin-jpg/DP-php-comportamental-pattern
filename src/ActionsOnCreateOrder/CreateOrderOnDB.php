<?php

namespace DesignPattern\ActionsOnCreateOrder;

use DesignPattern\ActionAfterCreatingOrder\ActionAfterCreatingOrder;
use DesignPattern\Order;

class CreateOrderOnDB implements ActionAfterCreatingOrder
{

  public function executeAction(Order $order): void
  {
    echo "Saving order on DB";
  }

}