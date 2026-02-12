<?php

namespace Brevo\SmsCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class CreateSmsCampaignRequestRecipients extends JsonSerializableType
{
    /**
     * @var ?array<int> $exclusionListIds List ids which have to be excluded from a campaign
     */
    #[JsonProperty('exclusionListIds'), ArrayType(['integer'])]
    public ?array $exclusionListIds;

    /**
     * @var array<int> $listIds Lists Ids to send the campaign to. **REQUIRED if scheduledAt is not empty**
     */
    #[JsonProperty('listIds'), ArrayType(['integer'])]
    public array $listIds;

    /**
     * @param array{
     *   listIds: array<int>,
     *   exclusionListIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->exclusionListIds = $values['exclusionListIds'] ?? null;
        $this->listIds = $values['listIds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
