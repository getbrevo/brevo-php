<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetCampaignRecipients extends JsonSerializableType
{
    /**
     * @var ?array<int> $excludedSegments Segment IDs excluded from the campaign
     */
    #[JsonProperty('excludedSegments'), ArrayType(['integer'])]
    public ?array $excludedSegments;

    /**
     * @var array<int> $exclusionLists
     */
    #[JsonProperty('exclusionLists'), ArrayType(['integer'])]
    public array $exclusionLists;

    /**
     * @var array<int> $lists
     */
    #[JsonProperty('lists'), ArrayType(['integer'])]
    public array $lists;

    /**
     * @var ?array<int> $segments Segment IDs included in the campaign
     */
    #[JsonProperty('segments'), ArrayType(['integer'])]
    public ?array $segments;

    /**
     * @param array{
     *   exclusionLists: array<int>,
     *   lists: array<int>,
     *   excludedSegments?: ?array<int>,
     *   segments?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->excludedSegments = $values['excludedSegments'] ?? null;
        $this->exclusionLists = $values['exclusionLists'];
        $this->lists = $values['lists'];
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
