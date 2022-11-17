<?php declare(strict_types=1);
namespace Ifthenpay\Core\Model;

class Gateway{

  public string $gatewayKey;
  public string $accountsString;

  public function __construct(string $gatewayKey, string $accountsString)
  {
    $this->gatewayKey = $gatewayKey;
    $this->accountsString = $accountsString;
  }
}