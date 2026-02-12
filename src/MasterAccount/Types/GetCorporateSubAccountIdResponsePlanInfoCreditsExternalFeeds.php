<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * externalFeeds credits remaining on the sub-account
 */
class GetCorporateSubAccountIdResponsePlanInfoCreditsExternalFeeds extends JsonSerializableType
{
    /**
     * Quantity of externalFeeds messaging limits
     * provided
     *
     * @var ?int $quantity
     */
    #[JsonProperty('quantity')]
    public ?int $quantity;

    /**
     * @var ?int $remaining Available externalFeeds messaging limits for use
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
