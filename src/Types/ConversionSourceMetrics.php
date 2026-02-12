<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class ConversionSourceMetrics extends JsonSerializableType
{
    /**
     * @var float $averageBasket
     */
    #[JsonProperty('averageBasket')]
    public float $averageBasket;

    /**
     * @var value-of<ConversionSourceMetricsConversionSource> $conversionSource
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
     * @param array{
     *   averageBasket: float,
     *   conversionSource: value-of<ConversionSourceMetricsConversionSource>,
     *   id: float,
     *   ordersCount: float,
     *   revenue: float,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
