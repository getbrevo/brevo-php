<?php

namespace Brevo\Deals\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\Deal;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * List of Deals
 */
class GetCrmDealsResponse extends JsonSerializableType
{
    /**
     * @var ?array<Deal> $items List of deals
     */
    #[JsonProperty('items'), ArrayType([Deal::class])]
    public ?array $items;

    /**
     * @param array{
     *   items?: ?array<Deal>,
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
