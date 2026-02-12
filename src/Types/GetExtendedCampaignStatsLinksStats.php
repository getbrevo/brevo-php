<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;

/**
 * Statistics about the number of clicks for the links
 */
class GetExtendedCampaignStatsLinksStats extends JsonSerializableType
{
    /**
     * @param array{
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        unset($values);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
