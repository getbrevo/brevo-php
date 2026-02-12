<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetContactBalancesResponseBalancesItem extends JsonSerializableType
{
    /**
     * @var ?int $contactId
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $loyaltySubscriptionId
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var ?string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public ?string $updatedAt;

    /**
     * @var ?float $value
     */
    #[JsonProperty('value')]
    public ?float $value;

    /**
     * @param array{
     *   contactId?: ?int,
     *   loyaltySubscriptionId?: ?string,
     *   updatedAt?: ?string,
     *   value?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactId = $values['contactId'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
        $this->value = $values['value'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
