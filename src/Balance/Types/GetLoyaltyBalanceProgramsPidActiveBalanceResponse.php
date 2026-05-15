<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Active balance response for a specific contact and balance definition.
 */
class GetLoyaltyBalanceProgramsPidActiveBalanceResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Total number of active balances.
     */
    #[JsonProperty('count')]
    public ?int $count;

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
     * @var ?string $balanceDefinitionId Unique identifier of the balance definition.
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?array<GetLoyaltyBalanceProgramsPidActiveBalanceResponseActiveBalancesItem> $activeBalances List of active balances.
     */
    #[JsonProperty('activeBalances'), ArrayType([GetLoyaltyBalanceProgramsPidActiveBalanceResponseActiveBalancesItem::class])]
    public ?array $activeBalances;

    /**
     * @param array{
     *   count?: ?int,
     *   loyaltyProgramId?: ?string,
     *   contactId?: ?int,
     *   balanceDefinitionId?: ?string,
     *   activeBalances?: ?array<GetLoyaltyBalanceProgramsPidActiveBalanceResponseActiveBalancesItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->count = $values['count'] ?? null;
        $this->loyaltyProgramId = $values['loyaltyProgramId'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->activeBalances = $values['activeBalances'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
