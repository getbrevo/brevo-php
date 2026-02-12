<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Segment ids and List ids to include/exclude from campaign
 */
class UpdateEmailCampaignRequestRecipients extends JsonSerializableType
{
    /**
     * @var ?array<int> $exclusionListIds List ids which have to be excluded from a campaign
     */
    #[JsonProperty('exclusionListIds'), ArrayType(['integer'])]
    public ?array $exclusionListIds;

    /**
     * @var ?array<int> $exclusionSegmentIds Segment ids which have to be excluded from a campaign.
     */
    #[JsonProperty('exclusionSegmentIds'), ArrayType(['integer'])]
    public ?array $exclusionSegmentIds;

    /**
     * @var ?array<int> $listIds Lists Ids to send the campaign to. **Campaign should only be updated with listIds if listIds were used to create it. REQUIRED if already not present in campaign and scheduledAt is not empty**
     */
    #[JsonProperty('listIds'), ArrayType(['integer'])]
    public ?array $listIds;

    /**
     * @var ?array<int> $segmentIds **Mandatory if listIds are not used. Campaign should only be updated with segmentIds if segmentIds were used to create it.** Segment ids to send the campaign to.
     */
    #[JsonProperty('segmentIds'), ArrayType(['integer'])]
    public ?array $segmentIds;

    /**
     * @param array{
     *   exclusionListIds?: ?array<int>,
     *   exclusionSegmentIds?: ?array<int>,
     *   listIds?: ?array<int>,
     *   segmentIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->exclusionListIds = $values['exclusionListIds'] ?? null;
        $this->exclusionSegmentIds = $values['exclusionSegmentIds'] ?? null;
        $this->listIds = $values['listIds'] ?? null;
        $this->segmentIds = $values['segmentIds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
