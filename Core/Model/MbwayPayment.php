<?php declare(strict_types=1);

namespace Ifthenpay\Core\Model;

class MbwayPayment extends Payment
{
    public int $mobileNumber;
    public string $requestId;

    public function __construct(string $orderId, string $status, float $amount, int $mobileNumber, string $requestId)
    {
        parent::__construct($orderId, $status, $amount);
        $this->mobileNumber = $mobileNumber;
        $this->requestId = $requestId;
    }
}