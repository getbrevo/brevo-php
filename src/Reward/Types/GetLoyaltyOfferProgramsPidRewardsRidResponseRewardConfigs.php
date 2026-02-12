<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetLoyaltyOfferProgramsPidRewardsRidResponseRewardConfigs extends JsonSerializableType
{
    /**
     * @var ?string $attribution Attribution config of the reward
     */
    #[JsonProperty('attribution')]
    public ?string $attribution;

    /**
     * @var ?string $code Code config of the reward
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $value Value config of the reward
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @param array{
     *   attribution?: ?string,
     *   code?: ?string,
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attribution = $values['attribution'] ?? null;
        $this->code = $values['code'] ?? null;
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
