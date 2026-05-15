<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetSubscriptionBalancesResponse extends JsonSerializableType
{
    /**
     * @var ?string $loyaltyProgramId Unique identifier of the loyalty program.
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @var ?int $contactId Unique identifier of the contact.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?array<GetSubscriptionBalancesResponseBalanceItem> $balance Aggregate balance per balance definition.
     */
    #[JsonProperty('balance'), ArrayType([GetSubscriptionBalancesResponseBalanceItem::class])]
    public ?array $balance;

    /**
     * @param array{
     *   loyaltyProgramId?: ?string,
     *   contactId?: ?int,
     *   balance?: ?array<GetSubscriptionBalancesResponseBalanceItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->balance = $values['balance'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
