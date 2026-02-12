<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetParameterSubscriptionInfoResponseBalance extends JsonSerializableType
{
    /**
     * @var ?array<GetParameterSubscriptionInfoResponseBalanceBalancesItem> $balances List of balance details associated with the contact.
     */
    #[JsonProperty('balances'), ArrayType([GetParameterSubscriptionInfoResponseBalanceBalancesItem::class])]
    public ?array $balances;

    /**
     * @var ?int $contactId Unique identifier of the contact.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $loyaltyProgramId Unique identifier of the loyalty program.
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @param array{
     *   balances?: ?array<GetParameterSubscriptionInfoResponseBalanceBalancesItem>,
     *   contactId?: ?int,
     *   loyaltyProgramId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->balances = $values['balances'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
