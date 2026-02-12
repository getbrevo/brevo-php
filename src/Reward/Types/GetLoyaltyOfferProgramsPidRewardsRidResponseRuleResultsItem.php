<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetLoyaltyOfferProgramsPidRewardsRidResponseRuleResultsItem extends JsonSerializableType
{
    /**
     * @var ?string $action Action for the defined rule
     */
    #[JsonProperty('action')]
    public ?string $action;

    /**
     * @var ?array<GetLoyaltyOfferProgramsPidRewardsRidResponseRuleResultsItemParametersItem> $parameters Parameters to define the reward
     */
    #[JsonProperty('parameters'), ArrayType([GetLoyaltyOfferProgramsPidRewardsRidResponseRuleResultsItemParametersItem::class])]
    public ?array $parameters;

    /**
     * @var ?string $service Selected service to define the reward
     */
    #[JsonProperty('service')]
    public ?string $service;

    /**
     * @param array{
     *   action?: ?string,
     *   parameters?: ?array<GetLoyaltyOfferProgramsPidRewardsRidResponseRuleResultsItemParametersItem>,
     *   service?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->action = $values['action'] ?? null;
        $this->parameters = $values['parameters'] ?? null;
        $this->service = $values['service'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
