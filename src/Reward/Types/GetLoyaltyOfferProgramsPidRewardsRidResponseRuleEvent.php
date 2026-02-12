<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetLoyaltyOfferProgramsPidRewardsRidResponseRuleEvent extends JsonSerializableType
{
    /**
     * @var ?string $name Name of the event
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $source Source of the event
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @param array{
     *   name?: ?string,
     *   source?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->source = $values['source'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
