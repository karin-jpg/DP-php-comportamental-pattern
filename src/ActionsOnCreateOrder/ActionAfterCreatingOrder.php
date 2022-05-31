<?php

namespace DesignPattern\ActionsOnCreateOrder;

use DesignPattern\Order;

interface ActionAfterCreatingOrder
{
  public function executeAction(Order $order): void;

}