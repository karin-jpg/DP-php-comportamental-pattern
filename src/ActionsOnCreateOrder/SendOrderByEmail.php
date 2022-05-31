<?php

namespace DesignPattern\ActionsOnCreateOrder;

use DesignPattern\Order;

class SendOrderByEmail
{
  public function executeAction(Order $order): void
  {
    echo "Sending email to order client";
  }

}