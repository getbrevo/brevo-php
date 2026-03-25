<?php

namespace Brevo\Balance\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Additional metadata for the balance definition.
 */
class PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestMeta extends JsonSerializableType
{
    /**
     * @var ?bool $isInternal Indicates whether the balance definition is internal.
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
