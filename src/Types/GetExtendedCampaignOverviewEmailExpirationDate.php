<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Expiration date configuration for the email campaign, if set. Contains the duration and unit of the email expiry.
 */
class GetExtendedCampaignOverviewEmailExpirationDate extends JsonSerializableType
{
    /**
     * @var ?int $duration Duration of the email expiry
     */
    #[JsonProperty('duration')]
    public ?int $duration;

    /**
     * @var ?value-of<GetExtendedCampaignOverviewEmailExpirationDateUnit> $unit Unit of the duration
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @param array{
     *   duration?: ?int,
     *   unit?: ?value-of<GetExtendedCampaignOverviewEmailExpirationDateUnit>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->duration = $values['duration'] ?? null;
        $this->unit = $values['unit'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
