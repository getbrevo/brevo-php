<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\ConversionSourceMetrics;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetEcommerceAttributionMetricsResponse extends JsonSerializableType
{
    /**
     * @var array<ConversionSourceMetrics> $results List of conversion attribution metrics
     */
    #[JsonProperty('results'), ArrayType([ConversionSourceMetrics::class])]
    public array $results;

    /**
     * @var GetEcommerceAttributionMetricsResponseTotals $totals Attribution list aggregated totals
     */
    #[JsonProperty('totals')]
    public GetEcommerceAttributionMetricsResponseTotals $totals;

    /**
     * @param array{
     *   results: array<ConversionSourceMetrics>,
     *   totals: GetEcommerceAttributionMetricsResponseTotals,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->results = $values['results'];
        $this->totals = $values['totals'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
