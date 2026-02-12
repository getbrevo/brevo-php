<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;

class GetLoyaltyOfferProgramsPidRewardsRidResponseLimitsItem extends JsonSerializableType
{
    /**
     * @var ?DateTime $createdAt Timestamp when the reward limit was created
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?string $durationUnit Unit of time for the reward limit's availability (e.g., day/week/month/year).
     */
    #[JsonProperty('durationUnit')]
    public ?string $durationUnit;

    /**
     * @var ?int $durationValue Number of days/weeks/month/year for reward limit
     */
    #[JsonProperty('durationValue')]
    public ?int $durationValue;

    /**
     * @var ?int $limitValue Value of the limit
     */
    #[JsonProperty('limitValue')]
    public ?int $limitValue;

    /**
     * @var ?string $rewardLimitId Unique identifier for the reward limit
     */
    #[JsonProperty('rewardLimitId')]
    public ?string $rewardLimitId;

    /**
     * @var ?bool $slidingSchedule Select true to calculate all redeems/attributions from the previous value of selected durationUnit to the current time
     */
    #[JsonProperty('slidingSchedule')]
    public ?bool $slidingSchedule;

    /**
     * @var ?string $type Type of reward
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?DateTime $updatedAt Timestamp when the reward limit was created
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   createdAt?: ?DateTime,
     *   durationUnit?: ?string,
     *   durationValue?: ?int,
     *   limitValue?: ?int,
     *   rewardLimitId?: ?string,
     *   slidingSchedule?: ?bool,
     *   type?: ?string,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdAt = $values['createdAt'] ?? null;
        $this->durationUnit = $values['durationUnit'] ?? null;
        $this->durationValue = $values['durationValue'] ?? null;
        $this->limitValue = $values['limitValue'] ?? null;
        $this->rewardLimitId = $values['rewardLimitId'] ?? null;
        $this->slidingSchedule = $values['slidingSchedule'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
