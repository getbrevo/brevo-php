<?php

namespace Brevo\Tier\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\Tier;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetLoyaltyProgramTierResponse extends JsonSerializableType
{
    /**
     * @var ?array<Tier> $items
     */
    #[JsonProperty('items'), ArrayType([Tier::class])]
    public ?array $items;

    /**
     * @param array{
     *   items?: ?array<Tier>,
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
