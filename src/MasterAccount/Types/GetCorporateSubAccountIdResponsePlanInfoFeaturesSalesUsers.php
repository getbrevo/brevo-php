<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Sales and service users to use phone, sales and
 * conversations
 */
class GetCorporateSubAccountIdResponsePlanInfoFeaturesSalesUsers extends JsonSerializableType
{
    /**
     * @var ?int $quantity Quantity of sales users provided
     */
    #[JsonProperty('quantity')]
    public ?int $quantity;

    /**
     * @var ?int $remaining Available sales users for use
     */
    #[JsonProperty('remaining')]
    public ?int $remaining;

    /**
     * @param array{
     *   quantity?: ?int,
     *   remaining?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->quantity = $values['quantity'] ?? null;
        $this->remaining = $values['remaining'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
