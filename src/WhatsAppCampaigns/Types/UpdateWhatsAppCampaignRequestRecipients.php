<?php

namespace Brevo\WhatsAppCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Segment ids and List ids to include/exclude from campaign
 */
class UpdateWhatsAppCampaignRequestRecipients extends JsonSerializableType
{
    /**
     * @var ?array<int> $excludedListIds List ids to exclude from the campaign
     */
    #[JsonProperty('excludedListIds'), ArrayType(['integer'])]
    public ?array $excludedListIds;

    /**
     * @var ?array<int> $listIds **Mandatory if scheduledAt is not empty**. List Ids to send the campaign to
     */
    #[JsonProperty('listIds'), ArrayType(['integer'])]
    public ?array $listIds;

    /**
     * @var ?array<int> $segments **Mandatory if listIds are not used**. Segment ids to send the campaign to.
     */
    #[JsonProperty('segments'), ArrayType(['integer'])]
    public ?array $segments;

    /**
     * @param array{
     *   excludedListIds?: ?array<int>,
     *   listIds?: ?array<int>,
     *   segments?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->excludedListIds = $values['excludedListIds'] ?? null;
        $this->listIds = $values['listIds'] ?? null;
        $this->segments = $values['segments'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
