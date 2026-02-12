<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetSubscriptionBalancesResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetSubscriptionBalancesResponseBalanceItem> $balance
     */
    #[JsonProperty('balance'), ArrayType([GetSubscriptionBalancesResponseBalanceItem::class])]
    public ?array $balance;

    /**
     * @param array{
     *   balance?: ?array<GetSubscriptionBalancesResponseBalanceItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
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
