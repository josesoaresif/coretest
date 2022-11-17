<?php declare(strict_types=1);
namespace Ifthenpay\Core\Model;

class Payment
{
  public string $orderId;
  public string $status;
  public float $amount;

  public function __construct(string $orderId, string $status, float $amount)
  {
    $this->orderId = $orderId;
    $this->status = $status;
    $this->amount = $amount;
  }
  
}
