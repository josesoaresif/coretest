<?php declare(strict_types=1);

namespace Ifthenpay\Core\Model;

class CcardPayment extends Payment
{
    public string $requestId;

    public function __construct(string $orderId, string $status, float $amount, string $requestId)
    {
        parent::__construct($orderId, $status, $amount);
        $this->requestId = $requestId;
    }
}