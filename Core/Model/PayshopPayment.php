<?php declare(strict_types=1);

namespace Ifthenpay\Core\Model;

class PayshopPayment extends Payment
{
    public string $reference;
    public string $deadline;
    public string $requestId;

    public function __construct(string $orderId, string $status, float $amount, string $reference, string $deadline, string $requestId)
    {
        parent::__construct($orderId, $status, $amount);
        $this->reference = $reference;
        $this->deadline = $deadline;
        $this->requestId = $requestId;
    }
}