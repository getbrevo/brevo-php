<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponse extends JsonSerializableType
{
    /**
     * @var float $averageBasket
     */
    #[JsonProperty('averageBasket')]
    public float $averageBasket;

    /**
     * @var value-of<GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponseConversionSource> $conversionSource
     */
    #[JsonProperty('conversionSource')]
    public string $conversionSource;

    /**
     * @var float $id
     */
    #[JsonProperty('id')]
    public float $id;

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
     * @var float $newCustomersCount
     */
    #[JsonProperty('newCustomersCount')]
    public float $newCustomersCount;

    /**
     * @param array{
     *   averageBasket: float,
     *   conversionSource: value-of<GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponseConversionSource>,
     *   id: float,
     *   ordersCount: float,
     *   revenue: float,
     *   newCustomersCount: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->averageBasket = $values['averageBasket'];
        $this->conversionSource = $values['conversionSource'];
        $this->id = $values['id'];
        $this->ordersCount = $values['ordersCount'];
        $this->revenue = $values['revenue'];
        $this->newCustomersCount = $values['newCustomersCount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
