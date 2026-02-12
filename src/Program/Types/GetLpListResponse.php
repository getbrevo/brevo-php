<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\LoyaltyProgram;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetLpListResponse extends JsonSerializableType
{
    /**
     * @var ?array<LoyaltyProgram> $items Loyalty Program list
     */
    #[JsonProperty('items'), ArrayType([LoyaltyProgram::class])]
    public ?array $items;

    /**
     * @param array{
     *   items?: ?array<LoyaltyProgram>,
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
