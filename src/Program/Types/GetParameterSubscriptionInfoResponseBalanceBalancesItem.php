<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetParameterSubscriptionInfoResponseBalanceBalancesItem extends JsonSerializableType
{
    /**
     * @var ?string $balanceDefinitionId Unique identifier for the balance definition).
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?string $balanceDefinitionName Name of the balance definition.
     */
    #[JsonProperty('balanceDefinitionName')]
    public ?string $balanceDefinitionName;

    /**
     * @var ?float $value The amount of the balance.
     */
    #[JsonProperty('value')]
    public ?float $value;

    /**
     * @param array{
     *   balanceDefinitionId?: ?string,
     *   balanceDefinitionName?: ?string,
     *   value?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->balanceDefinitionName = $values['balanceDefinitionName'] ?? null;
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
