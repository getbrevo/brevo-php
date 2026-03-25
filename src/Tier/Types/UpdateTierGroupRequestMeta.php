<?php

namespace Brevo\Tier\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Additional metadata for the tier group.
 */
class UpdateTierGroupRequestMeta extends JsonSerializableType
{
    /**
     * @var ?bool $isInternal Indicates whether the tier group is internal.
     */
    #[JsonProperty('isInternal')]
    public ?bool $isInternal;

    /**
     * @param array{
     *   isInternal?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->isInternal = $values['isInternal'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
