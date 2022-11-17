<?php declare(strict_types=1);

namespace Ifthenpay\Core\Model;

class MultibancoPayment extends Payment
{
    public string $entity;
    public string $reference;
    public string $deadline;
    public string $requestId;

    public function __construct(string $orderId, string $status, float $amount, string $entity, string $reference, string $deadline, string $requestId)
    {
        parent::__construct($orderId, $status, $amount);
        $this->entity = $entity;
        $this->reference = $reference;
        $this->deadline = $deadline;
        $this->requestId = $requestId;
    }
}