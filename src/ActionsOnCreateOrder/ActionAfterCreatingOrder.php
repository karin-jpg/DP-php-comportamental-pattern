<?php

namespace DesignPattern\ActionAfterCreatingOrder;

use DesignPattern\Order;

interface ActionAfterCreatingOrder
{
  public function executeAction(Order $order): void;

}