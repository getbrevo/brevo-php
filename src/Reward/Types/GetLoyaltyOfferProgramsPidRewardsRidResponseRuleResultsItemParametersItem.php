<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\ValueResponse;

class GetLoyaltyOfferProgramsPidRewardsRidResponseRuleResultsItemParametersItem extends JsonSerializableType
{
    /**
     * @var ?string $name Name of the rule
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?ValueResponse $value Selected value of the parameter to define the rule
     */
    #[JsonProperty('value')]
    public ?ValueResponse $value;

    /**
     * @param array{
     *   name?: ?string,
     *   value?: ?ValueResponse,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
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
