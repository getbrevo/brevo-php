<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;

class GetContactStatsResponseTransacAttributesItem extends JsonSerializableType
{
    /**
     * @var DateTime $orderDate Date of the order
     */
    #[JsonProperty('orderDate'), Date(Date::TYPE_DATE)]
    public DateTime $orderDate;

    /**
     * @var int $orderId ID of the order
     */
    #[JsonProperty('orderId')]
    public int $orderId;

    /**
     * @var float $orderPrice Price of the order
     */
    #[JsonProperty('orderPrice')]
    public float $orderPrice;

    /**
     * @param array{
     *   orderDate: DateTime,
     *   orderId: int,
     *   orderPrice: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->orderDate = $values['orderDate'];
        $this->orderId = $values['orderId'];
        $this->orderPrice = $values['orderPrice'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
