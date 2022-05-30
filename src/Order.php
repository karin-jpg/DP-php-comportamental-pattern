<?php

namespace DesignPattern;

class Order 
{
  public string $clientName;
  public \DateTimeInterface $completionDate;
  public Budget $budget;

}