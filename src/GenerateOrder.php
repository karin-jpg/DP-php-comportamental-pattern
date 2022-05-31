<?php

namespace DesignPattern;

use DesignPattern\Command\Commandd;

class GenerateOrder implements Commandd
{

  private float $budgetValue;
  private int $itemsQuantity;
  private string $clientName;

  public function __construct(float $budgetValue, int $itemsQuantity, string $clientName) 
  {
    $this->budgetValue = $budgetValue;
    $this->itemsQuantity = $itemsQuantity;
    $this->clientName = $clientName;
  }

  public function execute(): void
  {
    $budget = new Budget();
    $budget->value = $this->budgetValue;
    $budget->itemsQuantity = $this->itemsQuantity;
    
    $order = new Order();
    $order->completionDate = new \DateTimeImmutable();
    $order->clientName = $this->clientName;
    $order->budget = $budget;

    echo "order created!". PHP_EOL;
    
  }

}