<?php

namespace DesignPattern\ActionsOnCreateOrder;


use DesignPattern\Order;

class SendOrderByEmail implements ActionAfterCreatingOrder
{
  public function executeAction(Order $order): void
  {
    echo "Sending email to order client".PHP_EOL;
  }

}