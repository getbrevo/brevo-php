<?php

namespace Brevo\Tier\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\TierGroup;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetListOfTierGroupsResponse extends JsonSerializableType
{
    /**
     * @var ?array<TierGroup> $items
     */
    #[JsonProperty('items'), ArrayType([TierGroup::class])]
    public ?array $items;

    /**
     * @param array{
     *   items?: ?array<TierGroup>,
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
