<?php

namespace Brevo\Tier\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpdateTierRequestTierRewardsItem extends JsonSerializableType
{
    /**
     * @var ?string $rewardId Reward unique identifier
     */
    #[JsonProperty('rewardId')]
    public ?string $rewardId;

    /**
     * @param array{
     *   rewardId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->rewardId = $values['rewardId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
