<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\BalanceDefinition;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetBalanceDefinitionListResponse extends JsonSerializableType
{
    /**
     * @var ?array<BalanceDefinition> $items list of balance definitions
     */
    #[JsonProperty('items'), ArrayType([BalanceDefinition::class])]
    public ?array $items;

    /**
     * @param array{
     *   items?: ?array<BalanceDefinition>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->items = $values['items'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
