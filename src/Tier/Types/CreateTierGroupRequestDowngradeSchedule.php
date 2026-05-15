<?php

namespace Brevo\Tier\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Schedule configuration for tier downgrades. Required when downgradeStrategy is set to a schedule-based strategy.
 */
class CreateTierGroupRequestDowngradeSchedule extends JsonSerializableType
{
    /**
     * @var ?int $durationValue Duration value for the schedule.
     */
    #[JsonProperty('durationValue')]
    public ?int $durationValue;

    /**
     * @var ?value-of<CreateTierGroupRequestDowngradeScheduleDurationUnit> $durationUnit Duration unit for the schedule.
     */
    #[JsonProperty('durationUnit')]
    public ?string $durationUnit;

    /**
     * @var ?value-of<CreateTierGroupRequestDowngradeScheduleDurationModifier> $durationModifier Modifier for the duration.
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
     *   durationUnit?: ?value-of<CreateTierGroupRequestDowngradeScheduleDurationUnit>,
     *   durationModifier?: ?value-of<CreateTierGroupRequestDowngradeScheduleDurationModifier>,
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
