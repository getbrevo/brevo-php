<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Attribution list aggregated totals
 */
class GetEcommerceAttributionMetricsResponseTotals extends JsonSerializableType
{
    /**
     * @var float $averageBasket
     */
    #[JsonProperty('averageBasket')]
    public float $averageBasket;

    /**
     * @var float $ordersCount
     */
    #[JsonProperty('ordersCount')]
    public float $ordersCount;

    /**
     * @var float $revenue
     */
    #[JsonProperty('revenue')]
    public float $revenue;

    /**
     * @param array{
     *   averageBasket: float,
     *   ordersCount: float,
     *   revenue: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->averageBasket = $values['averageBasket'];
        $this->ordersCount = $values['ordersCount'];
        $this->revenue = $values['revenue'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
