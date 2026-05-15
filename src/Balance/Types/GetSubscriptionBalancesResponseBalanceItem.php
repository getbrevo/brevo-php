<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSubscriptionBalancesResponseBalanceItem extends JsonSerializableType
{
    /**
     * @var ?string $balanceDefinitionId Balance definition ID.
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?float $value Aggregate balance value for this definition.
     */
    #[JsonProperty('value')]
    public ?float $value;

    /**
     * @param array{
     *   balanceDefinitionId?: ?string,
     *   value?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
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
