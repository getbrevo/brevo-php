<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetContactBalancesResponse extends JsonSerializableType
{
    /**
     * @var ?string $balanceDefinitionId
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?array<GetContactBalancesResponseBalancesItem> $balances
     */
    #[JsonProperty('balances'), ArrayType([GetContactBalancesResponseBalancesItem::class])]
    public ?array $balances;

    /**
     * @var ?int $count
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?string $loyaltyProgramId
     */
    #[JsonProperty('loyaltyProgramId')]
    public ?string $loyaltyProgramId;

    /**
     * @param array{
     *   balanceDefinitionId?: ?string,
     *   balances?: ?array<GetContactBalancesResponseBalancesItem>,
     *   count?: ?int,
     *   loyaltyProgramId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->balances = $values['balances'] ?? null;
        $this->count = $values['count'] ?? null;
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
