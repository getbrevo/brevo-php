<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Specify the payment currency and amount.
 */
class Cart extends JsonSerializableType
{
    /**
     * @var 'EUR' $currency Currency code for the payment amount.
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var int $specificAmount Payment amount, in cents. e.g. if you want to request €12.00, then the amount in cents is 1200.
     */
    #[JsonProperty('specificAmount')]
    public int $specificAmount;

    /**
     * @param array{
     *   currency: 'EUR',
     *   specificAmount: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currency = $values['currency'];
        $this->specificAmount = $values['specificAmount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
