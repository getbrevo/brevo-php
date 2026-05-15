<?php

namespace Brevo\Tier\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Schedule configuration for tier upgrades. Required when upgradeStrategy is set to a schedule-based strategy.
 */
class CreateTierGroupRequestUpgradeSchedule extends JsonSerializableType
{
    /**
     * @var ?int $durationValue Duration value for the schedule.
     */
    #[JsonProperty('durationValue')]
    public ?int $durationValue;

    /**
     * @var ?value-of<CreateTierGroupRequestUpgradeScheduleDurationUnit> $durationUnit Duration unit for the schedule.
     */
    #[JsonProperty('durationUnit')]
    public ?string $durationUnit;

    /**
     * @var ?value-of<CreateTierGroupRequestUpgradeScheduleDurationModifier> $durationModifier Modifier for the duration.
     */
    #[JsonProperty('durationModifier')]
    public ?string $durationModifier;

    /**
     * @var ?string $scheduledDate Scheduled date in DD/MM format.
     */
    #[JsonProperty('scheduledDate')]
    public ?string $scheduledDate;

    /**
     * @param array{
     *   durationValue?: ?int,
     *   durationUnit?: ?value-of<CreateTierGroupRequestUpgradeScheduleDurationUnit>,
     *   durationModifier?: ?value-of<CreateTierGroupRequestUpgradeScheduleDurationModifier>,
     *   scheduledDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->durationValue = $values['durationValue'] ?? null;
        $this->durationUnit = $values['durationUnit'] ?? null;
        $this->durationModifier = $values['durationModifier'] ?? null;
        $this->scheduledDate = $values['scheduledDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
