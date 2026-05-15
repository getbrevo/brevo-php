<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Schedule configuration for tier downgrades.
 */
class TierGroupDowngradeSchedule extends JsonSerializableType
{
    /**
     * @var ?string $strategy Schedule strategy type.
     */
    #[JsonProperty('strategy')]
    public ?string $strategy;

    /**
     * @var ?int $durationValue Duration value for the schedule.
     */
    #[JsonProperty('durationValue')]
    public ?int $durationValue;

    /**
     * @var ?value-of<TierGroupDowngradeScheduleDurationUnit> $durationUnit Duration unit for the schedule.
     */
    #[JsonProperty('durationUnit')]
    public ?string $durationUnit;

    /**
     * @var ?value-of<TierGroupDowngradeScheduleDurationModifier> $durationModifier Modifier for the duration.
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
     *   strategy?: ?string,
     *   durationValue?: ?int,
     *   durationUnit?: ?value-of<TierGroupDowngradeScheduleDurationUnit>,
     *   durationModifier?: ?value-of<TierGroupDowngradeScheduleDurationModifier>,
     *   scheduledDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->strategy = $values['strategy'] ?? null;
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
